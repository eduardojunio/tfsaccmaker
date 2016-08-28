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

    {!! Form::open(['action' => 'UserController@postResetPassword']) !!}
        <fieldset class="form-group">
            {!! Form::label('oldPassword', 'Old password') !!}
            {!! Form::password('oldPassword', ['class' => 'form-control']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('newPassword', 'New password') !!}
            {!! Form::password('newPassword', ['class' => 'form-control', 'placeholder' => '6 to 50 characters']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('newPassword_confirmation', 'Repeat new password') !!}
            {!! Form::password('newPassword_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat your new password']) !!}
        </fieldset>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Reset">
            <a class="btn btn-default" href="/account" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
