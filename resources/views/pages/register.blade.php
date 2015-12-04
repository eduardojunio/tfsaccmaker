@extends('layouts.app')

@section('title', 'Create an account')

@section('content')

    <h3>Create an account</h3>
    <hr>

    {!! Form::open() !!}
        {!! Form::token() !!}
        <fieldset class="form-group">
            {!! Form::label('accountName', 'Account name') !!}
            {!! Form::text('accountName', null, ['class' => 'form-control', 'placeholder' => '4 to 30 characters']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('accountPassword', 'Account password') !!}
            {!! Form::password('accountPassword', ['class' => 'form-control', 'placeholder' => '6 to 50 characters']) !!}
        </fieldset>
        <p class="help-block">Do not use the same password that you use on other servers. It has come to our attention that owners of other servers will use their databases to hack accounts on TFSAccMaker. Your password is securely stored with a one-way encryption in our database.</p>
        <fieldset class="form-group">
            {!! Form::label('accountPassword2', 'Repeat password') !!}
            {!! Form::password('accountPassword2', ['class' => 'form-control', 'placeholder' => 'Repeat your password']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('email', 'E-mail address') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '3 to 255 characters']) !!}
        </fieldset>
        <p class="help-block">Your e-mail is primarily used to recover your account, so please enter a legitimate e-mail or you won't be able to recover your account when you lose it.</p>
        <fieldset class="form-group">
            {!! Form::label(null, 'Human verification') !!}
            {!! Recaptcha::render() !!}
        </fieldset>
        <p class="help-block">By creating an account you agree to the <a href="rules" target="_blank">TFSAccMaker rules</a>. Violating the rules may result in a banishment or deletion of <strong>all</strong> your accounts.</p>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Submit">
            <a class="btn btn-default" href="/" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
