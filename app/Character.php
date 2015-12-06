<?php

namespace App;

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
    protected $fillable = ['name', 'account_id', 'town_id', 'posx', 'posy', 'posz', 'cap', 'sex'];

    public function account()
    {
        return $this->belongsTo('App\User');
    }
}
