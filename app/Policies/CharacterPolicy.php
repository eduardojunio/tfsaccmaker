<?php

namespace App\Policies;

use App\Character;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CharacterPolicy
{
    use HandlesAuthorization;

    public function manage(User $user, Character $character)
    {
        return $user->id === $character->account_id;
    }
}
