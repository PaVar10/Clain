<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UserController extends Controller
{

    public function index()
    {
		    return view('demo');
    }


    public function create()
    {
		    return view('createuser');
    }

    public function store()
    {

     /*  $data=request()->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users,email',
          'password'=>'required'
          ],[
            'name.required'=> 'el campo nombre es obligatorio'
          ]);
    */

    $data=request();

    User::create([
    'name'=>$data['name'],
    'email'=>$data['email'],
    'password'=>bcrypt($data['password']) 
    ]);

    return redirect('users');
  }

}