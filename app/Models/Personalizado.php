<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Personalizado extends Model
{
    public static function get_horas_especialista($clinica,$especialista,$fecha){
        $datos=DB::table("planificacion_hora")->select("planificacion_hora.*","especialista.nombre")
                ->join("especialista","planificacion_hora.id_especialista","=","especialista.id")
                ->where("planificacion_hora.id_clinica",$clinica)->where("planificacion_hora.id_especialista",$especialista)
                ->where("planificacion_hora.fecha",$fecha)->orderBy("planificacion_hora.fecha")->orderBy("planificacion_hora.desde")->get();

        return $datos;
    }

    public static function get_horas_especialidad($clinica,$especialidad,$fecha)
    {
        $datos=DB::table("planificacion_hora")->select("planificacion_hora.*","especialista.nombre")
            ->join("especialista","planificacion_hora.id_especialista","=","especialista.id")
            ->where("planificacion_hora.id_clinica",$clinica)->where("especialista.id_especialidad",$especialidad)
            ->where("planificacion_hora.fecha",$fecha)->orderBy("planificacion_hora.fecha")->orderBy("planificacion_hora.desde")->get();
        return $datos;
    }
}
