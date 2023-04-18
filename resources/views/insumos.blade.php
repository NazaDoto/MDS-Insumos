@extends('plantilla')
@section('titulo')
MDS - Insumos
@endsection

@section('textoNavbar')
Insumos
@endsection
@section('cuerpo')
<div class="container mt-4">
    <form class="text-center"action="{{ route('insumos.store')}}" method="post">
        @csrf
        <label class="texto-opciones" for="direccion">Dirección</label>
        <select class="opciones text-center" name="direccion" id="direccion" required>
            <option value="default" disabled selected>Seleccionar dirección</option>
            <option value="Control de Gestión">Control de Gestión</option>
            <option value="Dirección Gral. de Administración">Dirección Gral. de Administración</option>
            <option value="Dirección Gral. de Desarrollo Social">Dirección Gral. de Desarrollo Social</option>
            <option value="Dirección Gral. de Despacho">Dirección Gral. de Despacho</option>
            <option value="Dirección Gral. de Informática">Dirección Gral. de Informática</option>
            <option value="Dirección Gral. de Recursos Humanos">Dirección Gral. de Recursos Humanos</option>
            <option value="Ministro">Ministro</option>
            <option value="Subsecretaría de Desarrollo Social">Subsecretaría de Desarrollo Social</option>
            <option value="Subsecretaría de Promoción Humana">Subsecretaría de Promoción Humana</option>            
        </select>
        <label class="texto-opciones" for="area">Área</label>
        <select class="opciones text-center" name="area" id="area" disabled required>
            <option value="Seleccionar dirección">Primero selecciona la dirección</option>
        </select>
        <label class="texto-opciones" for="insumo">Insumo</label>
        <select class="opciones text-center" name="insumo" id="insumo" required>
            <option value="Seleccionar insumo" disabled selected>Seleccionar insumo</option>
            <option value="Tóner">Tóner</option>
            <option value="Mouse">Mouse</option>
            <option value="Teclado">Teclado</option>
        </select>
        <label class="texto-opciones" for="toner" id="labelToner" hidden>Modelo de tóner</label>
        <select class="opciones text-center" name="toner" id="toner" hidden>
            <option value="Seleccionar tóner" disabled selected>Seleccionar tóner</option>
            <option value="17A">17A</option>
        </select>
        <label class="texto-opciones" for="nombre">Solicitante</label>
        <input class="opciones input-texto text-center" name="solicitante" id="solicitante" placeholder="Nombre y Apellido" type="text" required>
        <div class="text-center">
            <label for="signature-pad" class=" texto-opciones">Firma</label>
            <input type="text" name="firma" id="firma" hidden>
            <canvas id="signature-pad" class="text-center" width=300 height=200></canvas>
            <a class="btn-clear"id="clear">Borrar</a>
            <a class="btn-clear btn-firmar"id="firmar">Firmar</a>
        </div>
        <button class="btn-submit" type="submit">Guardar</button>
    </form>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/signature-pad.js') }}"></script>
@endsection