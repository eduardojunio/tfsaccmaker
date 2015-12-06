@extends('layouts.app')

@section('title', 'Character creation')

@section('content')

    <h3>Create a new character</h3>
    <hr>

    {!! Form::open(['action' => 'CharacterController@postNew']) !!}
        <fieldset class="form-group">
            {!! Form::label('name', 'Character name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '3 to 255 characters']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('sex', 'Sex') !!}
            {!! Form::select('sex', [0 => 'Female', 1 => 'Male'], null, ['class' => 'form-control']) !!}
        </fieldset>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Create">
            <a class="btn btn-default" href="/account" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
