<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UsuariosRequest;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UsuariosController extends Controller
{
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }
   
    public function index(){
        $usuarios = \App\Usuarios::all();
        
        return view('usuarios',compact('usuarios'));
    }

    public function create(){
        
        return view('create');
    }


    public function usuarios(Request $request){
        
      
        $data= $request;
        Usuarios::create([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
        
       return redirect()->route('home');
    }


}
