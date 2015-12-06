@extends('layouts.app')

@section('title', 'Create an account')

@section('content')

    <h3>Create an account</h3>
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

    {!! Form::open(['action' => 'Auth\AuthController@postRegister']) !!}
        <fieldset class="form-group">
            {!! Form::label('name', 'Account name') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '4 to 30 characters']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('password', 'Account password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '6 to 50 characters']) !!}
        </fieldset>
        <p class="help-block">Do not use the same password that you use on other servers. It has come to our attention that owners of other servers will use their databases to hack accounts on TFSAccMaker. Your password is securely stored with a one-way encryption in our database.</p>
        <fieldset class="form-group">
            {!! Form::label('password_confirmation', 'Repeat password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat your password']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('email', 'E-mail address') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '3 to 255 characters']) !!}
        </fieldset>
        <p class="help-block">Your e-mail is primarily used to recover your account, so please enter a legitimate e-mail or you won't be able to recover your account when you lose it.</p>
        <fieldset class="form-group">
            {!! Form::label(null, 'Human verification') !!}
            {!! Recaptcha::render() !!}
        </fieldset>
        <p class="help-block">By creating an account you agree to the <a href="rules" target="_blank">TFSAccMaker rules</a>. Violating the rules may result in a banishment or deletion of <strong>all</strong> your accounts.</p>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Create">
            <a class="btn btn-default" href="/" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
