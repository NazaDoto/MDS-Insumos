@extends('plantilla')
@section('titulo')
MDS - Informes
@endsection

@section('textoNavbar')
Informes
@endsection
@section('cuerpo')
<div class="container mt-4">
    <div class="form-group">
        <input type="text" class="form-control" id="buscar" placeholder="Buscar">
    </div>
    <div class="divTable text-center">

        <table class="table table-dark mt-2 table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección</th>
                    <th>Área</th>
                    <th>Insumo</th>
                    <th>Solicitante</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="productos-list">
                @foreach($insumos as $insumo)
                <tr>
                    <td>{{ $insumo->id }}</td>
                    <td>{{ $insumo->direccion }}</td>
                    <td>{{ $insumo->area }}</td>
                    <td>{{ $insumo->insumo }} {{$insumo->toner }}</td>
                    <td>{{ $insumo->solicitante }}</td>
                    <td><a class="btn-ver"href="{{ route('insumosInformes.createPDF', $insumo) }}">Ver</a></td>
                </tr>
            @endforeach
            </tbody>
    
            
        </table>
    </div>
    
    <script>
        $(document).ready(function() {
var timer;
$('#buscar').on('input', function() {
    clearTimeout(timer);
    timer = setTimeout(buscarProductos, 100);
});

function buscarProductos() {
    var buscar = $('#buscar').val();
    $.ajax({
        url: "{{ route('insumosInformes.index') }}",
        type: 'GET',
        data: {buscar:buscar,
        bool:0},
        dataType: 'json',
        success: function(insumos) {
            var html = '';
            insumos.forEach(insumo => {
                if (insumo.toner == null){

                    html += '<tr>' +
                        '<td>' + insumo.id + '</td>' +
                        '<td>' + insumo.direccion + '</td>' +
                        '<td>' + insumo.area + '</td>' +
                        '<td>' + insumo.insumo +'</td>' +
                        '<td>' + insumo.solicitante + '</td>' +
                        '<td><a class="btn-ver">Ver</a></td>' +
                        '</tr>';
                } else{
                    html += '<tr>' +
                        '<td>' + insumo.id + '</td>' +
                        '<td>' + insumo.direccion + '</td>' +
                        '<td>' + insumo.area + '</td>' +
                        '<td>' + insumo.insumo + ' ' + insumo.toner + '</td>' +
                        '<td>' + insumo.solicitante + '</td>' +
                        '<td><a class="btn-ver">Ver</a></td>' +
                        '</tr>';
                }
            
            });
            $('#productos-list').html(html);
        },
        error: function(xhr, textStatus, error) {
        
        console.log(error);
    }
    });
}
});
    </script>
    
    
</div>
@endsection