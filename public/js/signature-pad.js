const canvas = document.querySelector("canvas");
var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
    backgroundColor: 'rgba(255, 255, 255, 1)',
    penColor: 'rgb(0, 0, 0)'
});
var saveButton = document.getElementById('firmar');
var cancelButton = document.getElementById('clear');

saveButton.addEventListener('click', function(event) {
    if (signaturePad.isEmpty()) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No puedes firmar en blanco!'
        })
    } else {

        signaturePad.removeBlanks();
        document.getElementById('firma').value = btoa(signaturePad.toDataURL('image/png'));
        document.getElementById('direccion').classList.add("deshabilitado");
        document.getElementById('area').classList.add("deshabilitado");
        document.getElementById('insumo').classList.add("deshabilitado");
        document.getElementById('toner').classList.add("deshabilitado");
        document.getElementById('solicitante').readOnly = true;
        document.getElementById('solicitante').classList.add("deshabilitado");
        document.getElementById('btn-guardar').disabled = false;
    }
});
cancelButton.addEventListener('click', function(event) {
    signaturePad.clear();
    document.getElementById('direccion').classList.remove("deshabilitado");
    document.getElementById('area').classList.remove("deshabilitado");
    document.getElementById('insumo').classList.remove("deshabilitado");
    document.getElementById('toner').classList.remove("deshabilitado");
    document.getElementById('solicitante').readOnly = false;
    document.getElementById('solicitante').classList.remove("deshabilitado");
    document.getElementById('btn-guardar').disabled = true;
});

SignaturePad.prototype.removeBlanks = function() {
    var imgWidth = this._ctx.canvas.width;
    var imgHeight = this._ctx.canvas.height;
    var imageData = this._ctx.getImageData(0, 0, imgWidth, imgHeight),
        data = imageData.data,
        getAlpha = function(x, y) {
            return data[(imgWidth * y + x) * 4 + 3]
        },
        scanY = function(fromTop) {
            var offset = fromTop ? 1 : -1;

            // loop through each row
            for (var y = fromTop ? 0 : imgHeight - 1; fromTop ? (y < imgHeight) : (y >
                    -1); y += offset) {

                // loop through each column
                for (var x = 0; x < imgWidth; x++) {
                    if (getAlpha(x, y)) {
                        return y;
                    }
                }
            }
            return null; // all image is white
        },
        scanX = function(fromLeft) {
            var offset = fromLeft ? 1 : -1;

            // loop through each column
            for (var x = fromLeft ? 0 : imgWidth - 1; fromLeft ? (x < imgWidth) : (x >
                    -1); x += offset) {

                // loop through each row
                for (var y = 0; y < imgHeight; y++) {
                    if (getAlpha(x, y)) {
                        return x;
                    }
                }
            }
            return null; // all image is white
        };

    var cropTop = scanY(true),
        cropBottom = scanY(false),
        cropLeft = scanX(true),
        cropRight = scanX(false);

    var relevantData = this._ctx.getImageData(cropLeft, cropTop, cropRight - cropLeft, cropBottom - cropTop);
    this._ctx.canvas.width = cropRight - cropLeft;
    this._ctx.canvas.height = cropBottom - cropTop;
    this._ctx.clearRect(0, 0, cropRight - cropLeft, cropBottom - cropTop);
    this._ctx.putImageData(relevantData, 0, 0);
};

//const signaturePad = new SignaturePad(canvas);

// Returns signature image as data URL (see https://mdn.io/todataurl for the list of possible parameters)
//signaturePad.toDataURL(); // save image as PNG
//signaturePad.toDataURL("image/jpeg"); // save image as JPEG
//signaturePad.toDataURL("image/jpeg", 0.5); // save image as JPEG with 0.5 image quality
//signaturePad.toDataURL("image/svg+xml"); // save image as SVG data url

// Return svg string without converting to base64
//signaturePad.toSVG(); // "<svg...</svg>"
//signaturePad.toSVG({ includeBackgroundColor: true }); // add background color to svg output

// Draws signature image from data URL (mostly uses https://mdn.io/drawImage under-the-hood)
// NOTE: This method does not populate internal data structure that represents drawn signature. Thus, after using #fromDataURL, #toData won't work properly.
//signaturePad.fromDataURL("data:image/png;base64,iVBORw0K...");

// Draws signature image from data URL and alters it with the given options
//signaturePad.fromDataURL("data:image/png;base64,iVBORw0K...", { ratio: 1, width: 400, height: 200, xOffset: 100, yOffset: 50 });

// Returns signature image as an array of point groups
const data = signaturePad.toData();

// Draws signature image from an array of point groups
signaturePad.fromData(data);

// Draws signature image from an array of point groups, without clearing your existing image (clear defaults to true if not provided)
signaturePad.fromData(data, { clear: false });

// Clears the canvas
signaturePad.clear();

// Returns true if canvas is empty, otherwise returns false
signaturePad.isEmpty();

// Unbinds all event handlers
signaturePad.off();

// Rebinds all event handlers
signaturePad.on();