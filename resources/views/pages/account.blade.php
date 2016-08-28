@extends('layouts.app')

@section('title', 'Account Management')

@section('content')

    <h3>Account Management</h3>
    <hr>

    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {!! session('status') !!}
        </div>
    @endif

    <a class="btn btn-success" href="/character/new" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create a character</a>
    <a class="btn btn-info" href="/account/reset-password" role="button"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Change your password</a>

    <h3>Characters</h3>
    <table class="table table-striped">
        @forelse ($characters as $character)
        <tr>
            <td>{{ $startNumber++ }}. <strong><a href="/character/view/{{ $character->name }}">{{ $character->name }}</a></strong>{!! ($character->hide === 1) ? ' <span class="label label-warning"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> hidden</span>' : '' !!}{!! ($now->now()->lt($character->can_delete) && $character->deletion === 1) ? ' <span class="label label-danger">You\'ll be able to delete on: ' . $character->can_delete->toDateTimeString() . '</span>' : '' !!}</td>
            <td align="right">
                @if ($character->hide == 0)
                <a class="btn btn-warning btn-xs" href="/character/hide/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> Hide</a>
                @else
                <a class="btn btn-warning btn-xs" href="/character/unhide/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Unhide</a>
                @endif
                <a class="btn btn-info btn-xs" href="/character/edit/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
                @if ($character->deletion === 0)
                <a class="btn btn-danger btn-xs" href="/character/delete/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
                @else
                <a class="btn btn-warning btn-xs" href="/character/restore/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Restore</a>
                @endif
                @if ($now->now()->gte($character->can_delete) && $character->deletion === 1)
                <a class="btn btn-danger btn-xs" href="/character/delete-permanently/{{ $character->name }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td>You don't have any character, click <a href="/character/new">here</a> to create your first character.</td>
        </tr>
        @endforelse
    </table>

    <p class="help-block">
        @if ($maxCharacters != 0)
        You may create up to {{ $maxCharacters }} characters.
        @endif
        @if ($deletionDays != 0)
        If you wish to delete a character it will be pending deletion for {{ $deletionDays }} {{ ($deletionDays == 1) ? 'day' : 'days' }} before it is able to be completely removed.
        @endif
    </p>

@endsection
