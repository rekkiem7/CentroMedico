<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table="comuna";
    protected $fillable=['id','nombre','id_region','visible'];
}
