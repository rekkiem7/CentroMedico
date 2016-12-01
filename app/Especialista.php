<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $table="especialista";
    protected $fillable=['id','nombre','id_especialidad','visible'];
}
