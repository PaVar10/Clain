<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interaction;

class InteractionController extends Controller
{
    public function listar()
    {
        $list= DB::table('interactions')->get();
       // dd($list);
     //   $list= Interaction::all();
        return view('listInt', compact('list'));
    }

}
