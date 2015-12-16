<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Character Creation
    |--------------------------------------------------------------------------
    |
    | When creating a new character set it to `true` and the player will choose
    | the vocation and the new character will start at level 8, or set it to
    | `false` and the player will start with a new level 1 character without
    | vocation.
    |
     */

    'newCharacterWithVocation' => true,

    /*
    |--------------------------------------------------------------------------
    | Town list
    |--------------------------------------------------------------------------
    |
    | List of all the towns on the map.
    | Syntax: `town_id => 'Town name',`
    |
     */

    'towns' => [
        1 => 'Thais',
        2 => 'Unknown',
        3 => 'Unknown',
    ],

    /*
    |--------------------------------------------------------------------------
    | New character with vocation options
    |--------------------------------------------------------------------------
    |
    | This options only will have effect if the `newCharacterWithVocation` is
    | set to `true`.
    |
     */

    'newCharacterCapacity' => 420,
    'newCharacterExperience' => 4200,
    'newCharacterGroupId' => 1,
    'newCharacterHealth' => 185,
    'newCharacterHealthmax' => 185,
    'newCharacterLevel' => 8,
    'newCharacterLookbody' => 44,
    'newCharacterLookfeet' => 98,
    'newCharacterLookhead' => 15,
    'newCharacterLooklegs' => 76,
    'newCharacterLooktype' => 128,
    'newCharacterMana' => 35,
    'newCharacterManamax' => 35,
    'newCharacterSave' => 1,
    'newCharacterSkillAxe' => 10,
    'newCharacterSkillAxeTries' => 0,
    'newCharacterSkillClub' => 10,
    'newCharacterSkillClubTries' => 0,
    'newCharacterSkillDist' => 10,
    'newCharacterSkillDistTries' => 0,
    'newCharacterSkillFishing' => 10,
    'newCharacterSkillFishingTries' => 0,
    'newCharacterSkillFist' => 10,
    'newCharacterSkillFistTries' => 0,
    'newCharacterSkillShielding' => 10,
    'newCharacterSkillShieldingTries' => 0,
    'newCharacterSkillSword' => 10,
    'newCharacterSkillSwordTries' => 0,
    'newCharacterSoul' => 100,
    'newCharacterStamina' => 2520,
    'newCharacterTown' => 1,

    /*
    |--------------------------------------------------------------------------
    | Max number of characters that a player can create.
    |--------------------------------------------------------------------------
    |
    | Max number of characters that a player can create. Set it to `0` if you
    | want to remove the max characters limit.
    |
     */

    'maxCharacters' => 15,

    /*
    |--------------------------------------------------------------------------
    | Pending deletion days
    |--------------------------------------------------------------------------
    |
    | Days to pending deletion before the character could be deleted
    | permanently. Set it to `0` if you don't want to pending deletion.
    |
     */

    'deletionDays' => 7,

];
