@extends('layouts.app')

@section('title', 'Edit character information')

@section('content')

    <h3>Edit character information</h3>
    <hr>

    {!! Form::open(['action' => 'CharacterController@postEdit']) !!}
        <p class="help-block">Edit comments for <a href="/character/{{ $character->name }}">{{ $character->name }}</a> (max 300 characters)</p>
        {!! Form::hidden('character', $character->name) !!}
        <fieldset class="form-group">
            {!! Form::label('comment', 'Comment') !!}
            {!! Form::textarea('comment', $character->comment, ['class' => 'form-control']) !!}
        </fieldset>
        <p class="form-actions">
            <input class="btn btn-success" type="submit" value="Edit">
            <a class="btn btn-default" href="/account" role="button">Cancel</a>
        </p>
    {!! Form::close() !!}

@endsection
