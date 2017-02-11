<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $table = 'teams';

    protected $fillable = [
        'name', 'member1','member2','member3','member4','member5','member6','member7','member8'
    ];
    
}
