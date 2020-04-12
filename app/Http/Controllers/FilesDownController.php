<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;


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
        
        $industriaUsers = Auth::user()->industria; 
                       
        if (is_null($industriaUsers)){                        
            return redirect()
            ->route('users.downloads.down')
            ->with('error', 'Verifique com o Administrador'); 
        }
        else
        {    
            $file = DB::table('files')
            ->where('industria', 'like',  "%" . $industriaUsers)
            ->get();                    
        }
                     
        if (!empty($file['0']->id)){                        
            $id = $file['0']->id;
            return 
                view('users.downloads.down')->with('file', $file)->with('id',$id);                            
            }else{
                return redirect()
                    ->route('home')
                    ->with('error', 'Registro não encontrado');
            }


        
        //return view('users.downloads.down');
        /// fazer o filtro por industria                                
    }   
    
/**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */
   
        public function show()
        {
            return view('home');
                        //return response()->download($arqb);
                        //return Storage::download('file.jpg', $name, $headers);

           // return Storage::download($arqb->path, $arqb->name);
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