@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 s12 offset-m2">
            <div class="card-panel">
                <h4 class="title center">Login</h4>
                {{ Form::open(['route' => 'login', 'method' => 'post']) }}
                    <div class="input-field">
                        {{ Form::label('email', 'Correo Electrónico') }}
                        {{ Form::email('email', null) }}
                    </div>
                    <div class="input-field">
                        {{ Form::label('password', 'Contraseña') }}
                        {{ Form::password('password', null) }}
                    </div>
                    <div class="input-field">
                        <p>
                            <label>
                                {{ Form::checkbox('remember', null) }}
                                <span>Recuerdame</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field">
                        {{ Form::submit('Login', ['class' => 'btn amarillo']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
