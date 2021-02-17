<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {

        $datos = Prueba::all();
    //    dd($en_espera);
        return view('home', compact('datos'));
    }

    
}
