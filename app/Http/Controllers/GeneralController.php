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
    
}
