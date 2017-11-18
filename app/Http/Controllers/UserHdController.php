<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\UserHd;
use App\Http\Requests\UserHdRequest;
use Illuminate\Support\Facades\Hash;

class UserHdController extends Controller
{
    //

	public function index()
	{
		return "hola mundo";
	}

    public function registrar(UserHdRequest $request)
    {
    	
        //return echo (Crypt::encrypt($request->password));
    	//return response()->json(Hash::make($request->password));
    	$username=UserHd::where('username',$request->username)->first();
        $correo=UserHd::where('correo',$request->correo)->first();
        if(count($username)>0){
            return response()->json("El usuario ya existe elige otro");
        }
        if(count($correo)>0){
            return response()->json("El correo ya existe elige otro");
        }
        else {

            $user=UserHd::create();
        	$user->username=$request->username;
        	$user->password=Hash::make($request->password);
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
    }

    public function login(Request $request)
    {
        
        $pass=false;
    	$user=UserHd::where('username',$request->username)->first();
              
        	if (count($user)) {
                $pass=Hash::check($request->password,$user->password); 
        		return response()->json($pass);
        	}
        	else {
        		return response()->json(false);
        	}
            
    }

    public function show()
    {
    	
    }
}
