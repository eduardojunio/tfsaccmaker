@extends('layouts.app')

@section('title', 'Character Information')

@section('content')

    <h3>Character Information</h3>
    <hr>

    <table class="table table-striped table-condensed table-content">
    <tbody>
    <tr>
    <td style="width: 25%; vertical-align: top">Name:</td>
    <td>{{ $character->name }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Sex:</td>
    <td>{{ ($character->sex == 0) ? 'female' : 'male' }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Profession:</td>
    <td>
    <?php

switch ($character->vocation) {
    case 1:
        echo 'Sorcerer';
        break;

    case 2:
        echo 'Druid';
        break;

    case 3:
        echo 'Paladin';
        break;

    case 4:
        echo 'Knight';
        break;

    case 5:
        echo 'Master Sorcerer';
        break;

    case 6:
        echo 'Elder Druid';
        break;

    case 7:
        echo 'Royal Paladin';
        break;

    case 8:
        echo 'Elite Knight';
        break;

    default:
        echo 'None';
        break;
}

?>
    </td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Level:</td>
    <td>{{ $character->level }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Residence:</td>
    <td>{{ $towns[$character->town_id] }}</td>
    </tr>
    @if ($character->house != null)
    <tr>
    <td style="width: 25%; vertical-align: top">House:</td>
    <td><a href="#">{{ $character->house->name }}</a> ({{ $towns[$character->house->town_id] }})</td>
    </tr>
    @endif
    <tr>
    <td style="width: 25%; vertical-align: top">Last Seen:</td>
    <td>{{ ($character->lastlogin == 0) ? 'Never' : $character->lastlogin }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Comment:</td>
    <td>{{ $character->comment }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Total Online Time:</td>
    <td>{{ $character->onlinetime }}</td>
    </tr>
    <tr>
    <td style="width: 25%; vertical-align: top">Account Status:</td>
    <td>{{ ($character->premdays == 0) ? 'Free Account' : 'Premium Account' }}</td>
    </tr>
    </tbody>
    </table>

    <h3>Account Information</h3>
    <hr>

    <table class="table table-striped table-condensed table-content">
    <tbody>
    <tr>
    <td style="width: 25%">Created:</td>
    <td>{{ $character->account->created_at }}</td>
    </tr>
    </tbody>
    </table>

@endsection
