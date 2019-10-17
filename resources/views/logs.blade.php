<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>Reddit Corp.</title>
        <style>
            html, body {
                background-image: url('https://disrv.com/wp-content/uploads/2016/02/Technology-Background-Image.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        @if(session('message'))
            <div class="alert alert-success">
                <center>{{session('message')}}</center>
            </div>
        @endif
        <center><h1>Logs Reddit Corp.</h1></center>
        {!! Form::open(['action' => 'LogsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('problema','Problema')}}
                <br>
                {{Form::select('problema',['Normal' => 'Normal', 'Crítico' => 'Crítico'], null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('user','User')}}
                <br>
                {{Form::select('user',['Diego Balderrama' => 'Diego Balderrama', 'Ignacio Salgado' => 'Ignacio Salgado', 'Antony Chambi' => 'Antony Chambi', 'Ramiro Menendez' => 'Ramiro Menendez', 'Eric Vargas' => 'Eric Vargas', 'Diego Pardo' => 'Diego Pardo'], null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('area','Área')}}
                <br>
                {{Form::select('area',['Software' => 'Software', 'Hardware' => 'Hardware', 'Redes' => 'Redes', 'Calidad' => 'Calidad', 'Gerencia General' => 'Gerencia General', 'Seguridad' => 'Seguridad'], null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('responsable','Responsable')}}
                <br>
                {{Form::select('responsable',['Diego Balderrama' => 'Diego Balderrama', 'Ignacio Salgado' => 'Ignacio Salgado', 'Antony Chambi' => 'Antony Chambi', 'Ramiro Menendez' => 'Ramiro Menendez', 'Eric Vargas' => 'Eric Vargas', 'Diego Pardo' => 'Diego Pardo'], null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('estado','Estado')}}
                <br>
                {{Form::select('estado',['Pendiente' => 'Pendiente', 'Resuelto' => 'Resuelto', 'En Progreso' => 'En progreso' ], null, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                    {{Form::label('equipo','Equipo')}}
                    <br>
                    {{Form::text('equipo','',['class' => 'form-control', 'placeholder' => '¿Qué equipo está comprometido?'])}}
            </div>
            <div class="form-group">
                    {{Form::label('descripcion','Descripción')}}
                    <br>
                    {{Form::textarea('descripcion','',['class' => 'form-control', 'placeholder' => 'Explique el problema'])}}
            </div>
            <div class="form-group">
                    {{Form::label('fecha_reporte','Fecha Reporte')}}
                    <br>
                    {{Form::text('fecha_reporte','',['class' => 'form-control', 'placeholder' => 'Fecha en que se reportó el problema'])}}
            </div>
            <div class="form-group">
                    {{Form::label('fecha_resolucion','Fecha Resolución')}}
                    <br>
                    {{Form::text('fecha_resolucion','',['class' => 'form-control', 'placeholder' => 'Fecha en que se solucionó el problema'])}}
            </div>
            <center>{{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}</center>
        {!! Form::close() !!}
        <center><h1>Lista de Logs</h1></center>
        @if(count($Thelogs) >= 1)
        <div class='container'>
            @foreach($Thelogs as $log)
                @if($log->organization == 'diego')
                <h2>Log {{$log->problema_id}}</h2>
                    <div class="well">
                        <h3>Problema:</h3>{{$log->problema}}
                        <h3>User:</h3>{{$log->user}}
                        <h3>Área:</h3>{{$log->area}}
                        <h3>Responsable:</h3>{{$log->responsable}}
                        <h3>Estado:</h3>{{$log->estado}}
                        <h3>Equipo:</h3>{{$log->equipo}}
                        <h3>Descripción:</h3>{{$log->descripcion}}
                        <h3>Fecha reporte:</h3>{{$log->fecha_reporte}}
                        <h3>Fecha resolución:</h3>{{$log->fecha_resolucion}}
                    </div>
                @endif
            @endforeach
        </div>
        @else
            <center><p>No hay logs registrados</p><center>
        @endif
    </body>
</html>
