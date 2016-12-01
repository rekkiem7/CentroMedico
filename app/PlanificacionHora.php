<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanificacionHora extends Model
{
    protected $table="planificacion_hora";
    protected $fillable=['id','fecha','desde','hasta','id_especialista','id_clinica','user_auth','estado','visible'];
}
