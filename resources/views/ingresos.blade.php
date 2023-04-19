@extends('plantilla')
@section('titulo')
MDS - Ingresos
@endsection
@section('textoNavbar')
Ingresos
@endsection
@section('cuerpo')
<div class="container mt-4 va-m">
    <h4 style="font-weight: bold">Insumos disponibles</h4>
    <div class="divTable text-center ">

        <table class="table table-dark mt-2 table-striped">
            <thead>
                <tr>
                    <th>Insumo</th>
                    <th>Teclado</th>
                    <th>Mouse</th>
                    <th>BROTHER 1060</th>
                    <th>EPSON 296</th>
                    <th>HP 12A</th>
                    <th>HP 17A</th>
                    <th>HP 35A</th>
                    <th>HP 48A</th>
                    <th>HP 85A</th>
                    <th>HP 105A</th>
                    <th>HP 664</th>
                    <th>SAMSUNG 101</th>
                    <th>SAMSUNG 104</th>
                    <th>SAMSUNG 111</th>
                    <th>PANTUM PB219</th>
                    <th>PANTUM PD219</th>
                </tr>
            </thead>
            <tbody id="productos-list">
                <tr>
                    <td>Cantidad</td>
                    <td>{{ $insumo->teclados}}</td>
                    <td>{{ $insumo->mouse}}</td>
                    <td>{{ $insumo->{'1060'} }}</td>
                    <td>{{ $insumo->{'296'} }}</td>
                    <td>{{ $insumo->{'12A'} }}</td>
                    <td>{{ $insumo->{'17A'} }}</td>
                    <td>{{ $insumo->{'35A'} }}</td>
                    <td>{{ $insumo->{'48A'} }}</td>
                    <td>{{ $insumo->{'85A'} }}</td>
                    <td>{{ $insumo->{'105A'} }}</td>
                    <td>{{ $insumo->{'664'} }}</td>
                    <td>{{ $insumo->{'101'} }}</td>
                    <td>{{ $insumo->{'104'} }}</td>
                    <td>{{ $insumo->{'111'} }}</td>
                    <td>{{ $insumo->PB219 }}</td>
                    <td>{{ $insumo->PD219 }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="background-color:rgb(123, 194, 240); padding:20px; text-align:center;border-radius:10px;">

        <h4 style="font-weight: bold">Reponer insumos</h4>
        <form class="text-center"action="{{ route('ingresos.update')}}" method="post">
            @csrf
            @method('patch')
            <label class="texto-opciones" for="insumo" id="labelInsumo">Insumo:</label>
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
        <label class="texto-opciones" for="cantidad">Cantidad:</label>
        <input class="opciones input-texto text-center" type="number" name="cantidad" id="cantidad" placeholder="Cantidad">
        <button class="btn-submit" type="submit">Guardar</button>
        </form>
    </div>
</div>
@endsection