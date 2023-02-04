<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesores;

class ProfesorController extends Controller
{
    public function listprofesores()
    {
      //$consulta=Personas::orderBy('idpersona','DESC')->take(1)->get();
      //return view ('listpersonas');

      $consulta=profesores::select('idprofesor','nombrecompleto','documento','celular','direccion')
      ->orderBy('nombrecompleto')
      ->get();
      return view('profesores')->with('consulta',$consulta);

      
    }
    public function crearprofesores()
    {
      return view ('crearprofesores');

      
    }

    public function guardarprofesor(Request $request)
    {
      $this->validate($request,[
        //'ide'=>'required|numeric',
        //'ide'=>'required|regex:/^[E][M][P][-][0-9]{5}$/',
        //'nombre'=>'required|alpha',
        'nombre'=>'required|regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
        'apellido'=>'required|regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ü]+$/',
        'email'=>'required|email',
        //'celular'=>'required|integer'
        'celular'=>'required|regex:/^[0-9]{10}$/',
        //'precio'=>'required|regex:/^[0-9]+[.][0-9]{2}$/'
        //'precio'=>'required|regex:/^[0-9]*[.][0-9]{2}$/'
        
      ]);

      $Personas=new profesores;
      $Personas->nombre=$request->nombre;
      $Personas->apellido=$request->apellido;
      $Personas->email=$request->email;
      $Personas->celular=$request->celular;
      
      $Personas->save();

    
      Session::flash('mensaje',"La persona ha sido guardada corectamente");
      return redirect()->route('listpersonas');

    }
    public function mensaje()
    {
      return "hola persona";
    }

    public function borrarpersona($idp)
    {
      
        $empleados=profesores::find($idp)->forceDelete();
        
        Session::flash('mensaje',"La persona ha sido borrada corectamente");
        return redirect()->route('listpersonas');
       
    }

    public function actualizarprofesor($idp){
        $consulta=profesores::select('empleados.ide','empleados.nombre','empleados.apellido','departamentos.nombre as dep','empleados.email','empleados.deleted_at','empleados.idd','empleados.descripcion','empleados.sexo','empleados.celular','empleados.img')
        ->where('ide',$idp)
        ->get();
        $departamentos=departamentos::orderBy('nombre')->get();
        return view('actualizarempleado')->with('consulta',$consulta[0])->with('departamentos',$departamentos);
      }
}
