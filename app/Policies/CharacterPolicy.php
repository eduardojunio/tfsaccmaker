<?php

namespace App\Policies;

use App\Character;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CharacterPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Character $character)
    {
        return $user->id === $character->user_id;
    }
}
