<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use View;
use Input;
use Session;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Response;
use Cache;
use Validator;
use App\Region;
use App\Comuna;
use App\Clinica;
use App\Especialidad;
use App\Especialista;
use App\Models\Personalizado;
use App\PlanificacionHora;
use Config;

class GeneralController extends Controller
{
    public function index()
    {
        $data["regiones"]=Region::where('visible',1)->get();
        return view('index',$data);
    }

    public function get_comunas()
    {
        $region=$_POST['region'];
        $datos=Comuna::where('id_region',$region)->where('visible',1)->get();
        return json_encode($datos);

    }

    public function get_clinicas()
    {
        $comuna=$_POST['comuna'];
        $datos=Clinica::where('id_comuna',$comuna)->where('visible',1)->get();
        return json_encode($datos);

    }

    public function get_especialidades()
    {
        $clinica=$_POST['clinica'];
        $datos=Especialidad::where('id_clinica',$clinica)->where('visible',1)->get();
        return json_encode($datos);
    }

    public function get_especialistas()
    {
        $especialidad=$_POST['especialidad'];
        $datos=Especialista::where('id_especialidad',$especialidad)->where('visible',1)->get();
        return json_encode($datos);
    }

    public function get_detalle_hora()
    {
        $clinica=$_POST['clinica'];
        $especialidad=$_POST['especialidad'];
        $especialista=$_POST['especialista'];
        $fecha=$_POST['fecha'];
        $f=explode('-',$fecha);
        $fecha=$f[2].'-'.$f[1].'-'.$f[0];

        if($especialista==0)
        {
            $datos=Personalizado::get_horas_especialidad($clinica,$especialidad,$fecha);
            if($datos){return json_encode($datos);}else{return 0;}
        }else{
            $datos=Personalizado::get_horas_especialista($clinica,$especialista,$fecha);
            if($datos){return json_encode($datos);}else{return 0;}
        }
    }

    public function get_disponibilidad()
    {
        $clinica=$_POST['clinica'];
        $especialidad=$_POST['especialidad'];
        $especialista=$_POST['especialista'];
        $fecha=date('Y-m-d');
        if($especialista==0)
        {
            $datos=Personalizado::buscar_disponibilidad_especialidad($clinica,$especialidad,$fecha);
        }else{
            $datos=Personalizado::buscar_disponibilidad_especialista($clinica,$especialista,$fecha);
        }

        if($datos) {
            $jsonArray = array();
            for ($i = 0; $i < count($datos); $i++) {
                $buildjson = array("start" => $datos[$i]->fecha . 'T00:00:00', "end" => $datos[$i]->fecha . 'T23:59:59');
                array_push($jsonArray, $buildjson);
            }

            return json_encode($jsonArray);
        }else{return 0;}
    }

    public function update_reservacion()
    {
        $id=$_POST['id'];
        $estado=$_POST['estado'];
        $update=PlanificacionHora::where("id",$id)->update(['estado'=>$estado]);
        return $update;
    }

    
}
