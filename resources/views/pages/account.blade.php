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

    <a class="btn btn-success" href="/character/new" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create a character</a>
    <a class="btn btn-info" href="/account/reset-password" role="button"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Change your password</a>
    <a class="btn btn-warning" href="#" role="button"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Transfer a character</a>

    <h3>Characters</h3>
    <table class="table table-striped">
        @forelse ($characters as $character)
        <tr>
            <td>{{ $startNumber++ }}. <a href="">{{ $character->name }}</a></td>
            <td align="right">
                <a class="btn btn-warning btn-xs" href="#" role="button"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> Hide</a>
                <a class="btn btn-info btn-xs" href="#" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
                <a class="btn btn-danger btn-xs" href="/character/delete/{{ $character->id }}" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
            </td>
        </tr>
        @empty
        <tr>
            <td>You don't have any character, click <a href="/character/new">here</a> to create your first character.</td>
        </tr>
        @endforelse
    </table>

    <p class="help-block">
        You may create up to 15 characters. If you wish to delete a character it will be pending deletion for seven days before it is completely removed.
    </p>

@endsection
