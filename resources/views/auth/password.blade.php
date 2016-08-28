@extends('layouts.app')

@section('title', 'Forget Password')

@section('content')

    <h3>Forget Password</h3>
    <hr>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['action' => 'Auth\PasswordController@postEmail']) !!}
        <fieldset class="form-group">
            {!! Form::label('email', 'Account e-mail') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control', 'required' => 'required']) !!}
        </fieldset>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Send">
            <a class="btn btn-default" href="/" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
