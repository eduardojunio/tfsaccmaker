@extends('layouts.app')

@section('title', 'Who is online?')

@section('content')

<h3>Who is online?</h3>
<hr>

<table class="table table-striped table-condensed">
<thead>
<tr>
<th style="width:3%">#</th>
<th><a href="?by=name&amp;order=ASC">Name</a></th>
<th style="width:25%"><a href="?by=guildname&amp;order=ASC">Guild</a></th>
<th style="width:10%"><a href="?by=level&amp;order=ASC">Level</a></th>
<th style="width:20%"><a href="?by=vocation&amp;order=ASC">Vocation</a></th>
</tr>
</thead>
<tbody>

@foreach ($online as $character)

<tr>
<td></td>
<td><a href="/character/view/{{ $character->name }}">{{ $character->name }}</a></td>
<td><a href="/guild/view/Du+Verde">Du Verde</a></td>
<td>{{ $character->level }}</td>
<td>{{ $characterRepository->vocationName($character->vocation) }}</td>
</tr>

@endforeach



</tbody>
</table>

@endsection
