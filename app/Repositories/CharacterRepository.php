<?php

namespace App\Repositories;

use App\Character;
use App\OnlineCharacters;

class CharacterRepository
{
    public function online()
    {
        $characters = [];
        $OnlineCharacters = OnlineCharacters::all();

        foreach ($OnlineCharacters as $character) {
            $characters[] = Character::where('id', $character->player_id)->get()->first();
        }

        return $characters;
    }

    public function vocationName($vocationId)
    {
        switch ($vocationId) {
            case 1:
                return 'Sorcerer';
                break;

            case 2:
                return 'Druid';
                break;

            case 3:
                return 'Paladin';
                break;

            case 4:
                return 'Knight';
                break;

            case 5:
                return 'Master Sorcerer';
                break;

            case 6:
                return 'Elder Druid';
                break;

            case 7:
                return 'Royal Paladin';
                break;

            case 8:
                return 'Elite Knight';
                break;

            default:
                return 'None';
                break;
        }
    }

    public function isOnline(Character $character)
    {
        if (OnlineCharacters::where('player_id', $character->id)->get()->first() === null) {
            return false;
        }

        return true;
    }

    public function totalOnline()
    {
        return count(OnlineCharacters::all());
    }

    public function topFive()
    {
        return Character::orderBy('level', 'desc')->take(5)->get();
    }
}
