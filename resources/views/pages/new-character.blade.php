@extends('layouts.app')

@section('title', 'Character creation')

@section('content')

    <h3>Create a new character</h3>
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

    {!! Form::open(['action' => 'CharacterController@postNew']) !!}
        <fieldset class="form-group">
            {!! Form::label('name', 'Character name') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '3 to 20 characters', 'maxlength' => 20, 'required' => 'required']) !!}
        </fieldset>
        <fieldset class="form-group">
            {!! Form::label('sex', 'Sex') !!}
            {!! Form::select('sex', [0 => 'Female', 1 => 'Male'], old('sex'), ['class' => 'form-control', 'required' => 'required']) !!}
        </fieldset>
        @if ($newCharacterWithVocation)
        <fieldset class="form-group">
            {!! Form::label('vocation', 'Vocation') !!}
            {!! Form::select('vocation', [
                1 => 'Sorcerer',
                2 => 'Druid',
                3 => 'Paladin',
                4 => 'Knight',
            ], old('vocation'), ['class' => 'form-control', 'required' => 'required']) !!}
        </fieldset>
        @endif
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Create">
            <a class="btn btn-default" href="/account" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
