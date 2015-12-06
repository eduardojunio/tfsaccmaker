@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

    <h3>Reset Password</h3>
    <hr>

    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['action' => 'Auth\PasswordController@postReset']) !!}
        {!! Form::hidden('token', $token) !!}
        <fieldset class="form-group">
            {!! Form::label('email', 'Account e-mail') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('password', 'Account password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('password_confirmation', 'Repeat password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </fieldset>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Reset">
            <a class="btn btn-default" href="/" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
