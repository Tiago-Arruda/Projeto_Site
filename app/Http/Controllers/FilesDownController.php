<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class FilesDownController extends Controller
{
    /**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */
    public function index()
    {
     
        /// fazer o filtro por industria                                
    }    

   //fim da controller 

   /*pesquisa mais de um campo - Gesser
         $_nome = 'terceiro'; // $request->input('_nome');        
        $file = DB::table('files')
                    ->where('name', 'like',  "%" . $_nome)
                    ->where(function($query){
                        $industriaUsers = Auth::user()->industria;                        
                        return $query->where('industria', 'like',  "%" . $industria)
                        ->pluck('name');                        
                            }                        
                        )
                    ->get();                                                  
        
        */  

       
}