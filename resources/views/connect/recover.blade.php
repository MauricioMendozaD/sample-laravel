@extends('connect.master')

@section('title', 'Recover')

@section('content')
<div class="box box_login shadow">
    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/images/logoNexus.png') }}" />
        </a>
    </div>
    <div class="inside">
        {!! Form::open(['url' => '/login']) !!}
        <label for="email">Correo Electrónico:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-at"></i></div>
            </div>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <label for="password" class="mtop16">Password:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}

        <div class="footer mtop16">
            <a href="{{ url('/register') }}">¿No tienes una cuenta?, Registrate</a>
            <a href="{{ url('/recover') }}">Recuperar contraseña</a>
        </div>
    </div>
</div>
@stop
