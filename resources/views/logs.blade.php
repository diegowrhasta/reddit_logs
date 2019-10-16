<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <title>Reddit Corp.</title>
        <style>
            html, body {
                background-image: url('https://disrv.com/wp-content/uploads/2016/02/Technology-Background-Image.jpg');
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
                {{Form::text('problema','',['class' => 'form-control', 'placeholder' => 'Código del Problema'])}}
            </div>
            <div class="form-group">
                    {{Form::label('user','User')}}
                    <br>
                    {{Form::text('user','',['class' => 'form-control', 'placeholder' => '¿Quién está reportando el problema?'])}}
            </div>
            <div class="form-group">
                    {{Form::label('area','Área')}}
                    <br>
                    {{Form::text('area','',['class' => 'form-control', 'placeholder' => '¿De qué dirección viene este reporte?'])}}
            </div>
            <div class="form-group">
                    {{Form::label('responsable','Responsable')}}
                    <br>
                    {{Form::text('responsable','',['class' => 'form-control', 'placeholder' => '¿Quién resolverá este problema?'])}}
            </div>
            <div class="form-group">
                    {{Form::label('estado','Estado')}}
                    <br>
                    {{Form::text('estado','',['class' => 'form-control', 'placeholder' => '¿En qué estado se encuentra el problema?'])}}
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
        @if(count($logs) > 1)
            @foreach($logs as $log)
                <div class="well">
                    <h3>{{$log->problema}}</h3>
                    <h3>{{$log->user}}</h3>
                    <h3>{{$log->area}}</h3>
                    <h3>{{$log->responsable}}</h3>
                    <h3>{{$log->estado}}</h3>
                    <h3>{{$log->equipo}}</h3>
                    <h3>{{$log->descripcion}}</h3>
                    <small>Fecha reporte: {{$log->fecha_reporte}}</small>
                    <small>Fecha resolución: {{$log->fecha_resolucion}}</small> 
                </div>
            @endforeach
        @else
            <center><p>No hay logs registrados</p><center>
        @endif
    </body>
</html>
