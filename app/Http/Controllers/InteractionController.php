<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interaction;

use App\Exports\InteractionExport;
use App\Imports\InteractionImport;
use Maatwebsite\Excel\Facades\Excel;


class InteractionController extends Controller
{
    public function listar()
    {
        $list= DB::table('interactions')->get();

        return view('listInt', compact('list'));
    }

   /* 
    public function carga()
    {
        
        return view('cargarint');
    }

*/
 

        public function carga($id)
        {
            
            return view('cargarint', ['id'=>$id]);
        }


    public function export() 
    {
        return Excel::download(new InteractionExport, 'interaction.csv');
    }




   public function importExcel(Request $request)  
    {
      $file = $request->file('file');
      Excel::import(new InteractionImport, $file);

      
      $list= DB::table('interactions')->get();
      return view('listInt', compact('list'));
   
    }



    public function update(Request $request, $id)
    {

      $interaction= Interaction::find($id);

      $interaction->conducta=$request->get('conducta');

      $interaction->save();

      $list= DB::table('interactions')->get();

      return view('listInt', compact('list'));

    
  }


}