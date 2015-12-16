<?php

namespace App;

use App\House;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'players';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'group_id', 'account_id', 'level', 'vocation', 'health',
        'healthmax', 'experience', 'lookbody', 'lookfeet', 'lookhead',
        'looklegs', 'looktype', 'lookaddons', 'maglevel', 'mana', 'manamax',
        'manaspent', 'soul', 'town_id', 'posx', 'posy', 'posz', 'cap', 'sex',
        'lastip', 'save', 'skull', 'skulltime', 'blessings', 'deletion',
        'stamina', 'skill_fist', 'skill_fist_tries', 'skill_club',
        'skill_club_tries', 'skill_sword', 'skill_sword_tries', 'skill_axe',
        'skill_axe_tries', 'skill_dist', 'skill_dist_tries', 'skill_shielding',
        'skill_shielding_tries', 'skill_fishing', 'skill_fishing_tries',
        'can_delete', 'comment', 'hide', 'created_at', 'updated_at',
    ];

    protected $dates = ['can_delete'];

    public function account()
    {
        return $this->belongsTo('App\User');
    }

    public function house()
    {
        return $this->hasOne('App\House', 'owner');
    }
}
