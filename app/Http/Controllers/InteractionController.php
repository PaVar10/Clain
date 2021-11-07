<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interaction;

use App\Exports\InteractionExport;
use App\Imports\InteractionImport;
use Maatwebsite\Excel\Facades\Excel;

use GuzzleHttp\Client;


class InteractionController extends Controller
{


    public function listar($id)
    {
        $conversation_id=$id;
        //$list= DB::table('interactions')->get();
        $list= DB::table('interactions')->where('conversation_id' , $conversation_id)->get();
        return view('listInt', compact('list'));
    }

    public function showlist($id)
    {
        $conversation_id=$id;
        $list= DB::table('interactions')->where('conversation_id' ,$id)->get();
        return view('listInt', compact('list'));
    }

    public function carga($id)
    {
        
        return view('cargarint', ['id'=>$id]);
    }


    public function export() 
    {
        return Excel::download(new InteractionExport, 'interaction.csv');
    }




 /*  public function importExcel(Request $request,$id)  
    {
      dd($request->all(), $id) ; 
      $file = $request->file('file');
      Excel::import(new InteractionImport, $file);

      
      $list= DB::table('interactions')->get();
      return view('listInt', compact('list'));
   
    }*/

    public function importExcel(Request $request,$id)  
    {   
         
        $csv_file = $request['file'];
        $conversation_id=$id;
        
            try {
                DB::beginTransaction();

                if (($handle = fopen($csv_file, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                       //dd($data);
                        $interaction= new Interaction();

                        $interaction->interaction= $data[0];
                        $interaction->conversation_id= $conversation_id;
                  
                        $interaction->save();
                    }
                    fclose($handle);
                }
                DB::commit();
            } catch (QueryException $e) {

                DB::rollBack();
                print_r($e->getMessage());
            }
            $list= DB::table('interactions')->where('conversation_id' , $conversation_id)->get();
            return view('listInt', compact('list'));
    }


    public function update(Request $request, $id)
    {

      $interaction= Interaction::find($id);

      $interaction->conduct=$request->get('conducta');

      $interaction->save();
         
      $conversation_id= $interaction->conversation_id;
   
      $list= DB::table('interactions')->where('conversation_id' , $conversation_id)->get();

      return view('listInt', compact('list'));

    
  }


    public  function clasificar($id)
    {
        $list= DB::table('interactions')->select('interaction')->where('conversation_id' , $id)->get();
        dd($list);
     //   return view('listInt', compact('list'));

        $client = new Client([
            // Base URI is used with relative requests ___ se define a que url te conectas
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
             $response = $client->request('GET', 'posts'); //https://jsonplaceholder.typicode.com/posts

                $posts = json_decode($response->getBody()->getContents());

                dd($posts);

             return view('welcome');


    }

}