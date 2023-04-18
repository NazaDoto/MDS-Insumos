<!DOCTYPE html>
<html>
<head>
    <title>Entrega de insumo N°{{$id}}</title>
    <link rel="stylesheet" href="{{ public_path('/css/pdf.css') }}">
</head>
<body>
    <header>
        <img src="{{ public_path('/recursos/icono-mds-negro.png')}}"height="50">
    </header>

    <h2 style="text-align:center;text-decoration: underline;">Solicitud de Insumos</h2> <br><br>

    <div class="container">
        
        <p>Fecha de Solicitud: {{$fecha->format('d/m/y')}}</p>
        <p>

            Dirección: {{ $direccion }}
        </p>
        <p>
            Área: {{$area}}

        </p>
        
        <br>
        <p style="display:block; text-align:left;">Insumo: {{$insumo}} {{$toner}}</p>
        <br>
        <div class="divisionD2" style="text-align: center">
            <p>Solicitante:<br>{{$solicitante}}</p>
            <img src="{{base64_decode($firma)}}" alt="">
        </div>
    </div>    
      
</body>
</html>