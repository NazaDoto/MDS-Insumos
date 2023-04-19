@extends('plantilla')
@section('titulo')
MDS - Solicitud
@endsection


@section('cuerpo')
@include('sweetalert::alert')
@if (session('error'))
    <div class="alert-error">
        {{session('error')}}
    </div>
    @endif
<div class="container mt-4">
    <form class="text-center"action="{{ route('insumos.store')}}" method="post" id="divForm">
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
            <option value="Seleccionar dirección">Primero seleccioná la dirección</option>
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
            <option value="1060">BROTHER 1060</option>
        <option value="296">EPSON 296</option>
        <option value="12A">HP 12A</option>
        <option value="17A">HP 17A</option>
        <option value="35A">HP 35A</option>
        <option value="48A">HP 48A</option>
        <option value="85A">HP 85A</option>
        <option value="105A">HP 105A</option>
        <option value="664">HP 664</option>
        <option value="101">SAMSUNG 101</option>
        <option value="104">SAMSUNG 104</option>
        <option value="111">SAMSUNG 111</option>
        <option value="PB219">PANTUM PB219</option>
        <option value="PD219">PANTUM PD219</option>
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
        <button class="btn-submit" type="submit" id="btn-guardar" disabled>Guardar</button>
    </form>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('/js/signature-pad.js') }}"></script>
@endsection