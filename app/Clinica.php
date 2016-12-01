<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table="clinica";
    protected $fillable=['id','nombre','id_comuna','visible'];
}
