$("#direccion").change(function() {
    switch ($(this).val()) {
        case "Control de Gestión":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Administración">Administración</option>
            <option value="Depósito">Depósito</option>
            `;
            break;

        case "Dirección Gral. de Administración":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Automotores">Automotores</option>
            <option value="Bienes Patrimoniales">Bienes Patrimoniales</option>
            <option value="Compras">Compras</option>
            <option value="Contrataciones">Contrataciones</option>
            <option value="Despacho">Despacho</option>
            <option value="Habilitación">Habilitación</option>
            <option value="Rendición de Cuentas Nacionales">Rendición de Cuentas Nacionales</option>
            <option value="Sueldos">Sueldos</option>
            <option value="Tesorería">Tesorería</option>
            `;
            break;

        case "Dirección Gral. de Desarrollo Social":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Adultos Mayores">Adultos Mayores</option>
            <option value="Asistencia Directa">Asistencia Directa</option>
            <option value="Comedores Comunitarios">Comedores Comunitarios</option>
            <option value="Comedores Escolares">Comedores Escolares</option>
            <option value="Economía Social">Economía Social</option>
            <option value="Nutrición">Nutrición</option>
            <option value="Rendición de Cuentas">Rendición de Cuentas</option>
            <option value="Servicios Fúnebres">Servicios Fúnebres</option>
            <option value="Tarjetas Sociales">Tarjetas Sociales</option>
            <option value="Privada">Privada</option>
            `;
            break;

        case "Dirección Gral. de Despacho":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Despacho">Despacho</option>
            <option value="Mesa Gral. de Entradas">Mesa Gral. de Entradas</option>
            `;
            break;

        case "Dirección Gral. de Informática":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Operaciones">Operaciones</option>
            <option value="Servicio Técnico">Servicio Técnico</option>
            `;
            break;

        case "Dirección Gral. de Recursos Humanos":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Despacho">Despacho</option>
            <option value="Personal">Personal</option>
            `;
            break;

        case "Ministro":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Asesoría Jurídica">Asesoría Jurídica</option>
            <option value="Audiencias">Audiencias</option>
            <option value="Ministro">Ministro</option>
            <option value="Secretaría Privada">Secretaría Privada</option>
            <option value="Prensa">Prensa</option>
            `;
            break;

        case "Subsecretaría de Desarrollo Social":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Área Técnica Social">Área Técnica Social</option>
            <option value="Coordinación Gral. Ejecutiva">Coordinación Gral. Ejecutiva</option>
            <option value="Despacho">Despacho</option>
            <option value="Hogar de Ciegos">Hogar de Ciegos</option>
            <option value="Hogar Diurno de Ancianos">Hogar Diurno de Ancianos</option>
            <option value="Mesa de Entradas">Mesa de Entradas</option>
            <option value="Redes Sociales">Redes Sociales</option>
            <option value="Residencia Mama Antula">Residencia Mama Antula</option>
            <option value="Subsecretario">Subsecretario</option>
            <option value="Secretaría Privada">Secretaría Privada</option>
            `;
            break;

        case "Subsecretaría de Promoción Humana":
            document.getElementById("area").disabled = false;
            document.getElementById("area").innerHTML = `
            <option value="default" disabled selected>Seleccionar área</option>
            <option value="Archivo">Archivo</option>
            <option value="Asistencia Técnica">Asistencia Técnica</option>
            <option value="Despacho">Despacho</option>
            <option value="Mesa de Entradas">Mesa de Entradas</option>
            <option value="Secretaría Privada">Secretaría Privada</option>
            `;
            break;

        default:
            break;
    }
});

$("#insumo").change(function() {
    if ($(this).val() == "Tóner") {
        document.getElementById("labelToner").hidden = false;
        document.getElementById("toner").hidden = false;
    } else {
        document.getElementById("labelToner").hidden = true;
        document.getElementById("toner").hidden = true;
        document.getElementById("toner").value = null;
    }
});