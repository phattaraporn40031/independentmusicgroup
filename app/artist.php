<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    protected $table = 'artist';
    protected $fillable = ['name','profile','style','facebook','youtube','image'];
    
}
