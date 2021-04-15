<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Conversation;

class conversationController extends Controller
{
    public function create()
    {
		return view('createconversation');
    }



    public function store(){

    //    $id = Auth::id();
        $data=request();
        Conversation::create([
        'name'=>$data['name'],
        'description'=>$data['descripcion'],
        'user_id'=>1
         ]);

         $conv= DB::table('conversations')->get();

         return view('listconversation', compact('conv'));   


  }

        public function showlist()
        {
            $conv= DB::table('conversations')->get();

            return view('listconversation', compact('conv')); 
        }

}
