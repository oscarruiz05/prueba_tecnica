<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class DatosController extends Controller
{
    public function store(Request $request){
        if($request->file){
            $file_name = $request->file;

            $contents = File::get($file_name);

            $datos = explode(",", $contents);
        }else{
            return redirect()->back()->with(['create' => 0, 'mensaje' => 'No existe archivo']);
        }
        

        if($datos[0] && $datos[3]){
            $prueba = Prueba::create([
                'correo' => $datos[0],
                'nombre' => $datos[1],
                'apellido' => $datos[2],
                'codigo' => $datos[3]
            ]);
            // dd($prueba);
            return redirect()->back()->with(['create' => 1, 'mensaje' => 'El archivo se procesó correctamente']);
        }else{
            return redirect()->back()->with(['create' => 0, 'mensaje' => 'El archivo no tiene formato correcto']);
        }
    }
    public function show(Prueba $datos){
        return view('show', compact('datos'));
    }
    public function update(Request $request, Prueba $datos){
        $datos->correo = $request->correo;
        $datos->nombre = $request->nombre;
        $datos->apellido = $request->apellido;
        $datos->codigo = $request->codigo;
        $datos->save();

        

        return redirect()->route('home')->with(['create' => 1, 'mensaje' => 'registro actualizado']);

    }
    public function delete($id) {
        if($datos = Prueba::find($id)->delete()) {
            return redirect()->back()->with(['create' => 1, 'mensaje' => 'El registro se elimino correctamente']);
        } else {
            return redirect()->back()->with(['create' => 0, 'mensaje' => 'El registro NO se elimino correctamente']);
        }
    }
}
