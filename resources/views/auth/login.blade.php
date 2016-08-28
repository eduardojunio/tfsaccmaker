@extends('layouts.app')

@section('title', 'Account Login')

@section('content')

    <h3>Account Login</h3>
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

    {!! Form::open() !!}
        <fieldset class="form-group">
            {!! Form::label('name', 'Account name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('password', 'Account password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </fieldset>
        <div class="checkbox">
          <label>
            {!! Form::checkbox('remember', null, null) !!} Stay signed in
          </label>
        </div>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Sign In">
            <a class="btn btn-default" href="/" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
