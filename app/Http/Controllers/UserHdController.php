<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\UserHd;
use App\Http\Requests\UserHdRequest;


class UserHdController extends Controller
{
    //

	public function index()
	{
		return "hola mundo";
	}

    public function registrar(UserHdRequest $request)
    {
    	
        
    	//dd($request);
    	$user=UserHd::create();
    	$user->username=$request->username;
    	$user->password=Crypt::encrypt($request->password);
    	$user->nombre=$request->nombre;
    	$user->apellidoM=$request->apellidoM;
    	$user->apellidoP=$request->apellidoP;
    	$user->correo=$request->correo;
    	$user->fecha_nacimiento=$request->fecha_nacimiento;
    	$user->sexo=$request->sexo;
    	$user->direccion=$request->direccion;
    	$user->codigo_postal=$request->codigo_postal;
    	$user->celular=$request->celular;
    	$user->licencia=$request->licencia;
    	$check=$user->save();
    	//$data=$request->appname;
        if ($check) {
            return response()->json(true);
        }
        else {
            return response()->json(false);
        }
    	//return response()->json($request);
    
    }

    public function login(Request $request)
    {
       
    	$user=UserHd::where('username',$request->username)->where(Crypt::decrypt('password'),$request->password)->get();
    	if (count($user)>0) {
    		return response()->json(true);
    	}
    	else {
    		return response()->json(false);
    	}
    }

    public function show()
    {
    	
    }
}
