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

class GeneralController extends Controller
{
    public function index()
    {
        $data["regiones"]=Region::where('visible',1)->get();
        return view('index',$data);
    }
    
}
