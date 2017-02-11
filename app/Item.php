<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
    'category', 'fest','department','name','intro','description','conditions','contact'
    ];
}
