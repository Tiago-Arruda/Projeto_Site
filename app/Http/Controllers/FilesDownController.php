<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\User;

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
     
        $indUsers = Auth::user()->industria;
       
        if ($indUsers<>""){                                   
            
            $file = DB::table('files')        
            ->where(function($query){
                $industriaUsers = Auth::user()->industria;

                     return $query->where('industria', $industriaUsers);

                }
            )
            ->get();
                        
            $id = $file['0']->id;                                                      
            
            if($file>0) {                        
                return view('users.downloads.down')->with('file', $file)->with('id',$id);
            }
            else{
                return redirect()
                ->route('home')
                ->with('error', 'verifique seu cadastro com o Administrador'); 
            }


            
         }else{            
            return redirect()
            ->route('home')
            ->with('error', 'Registro não encontrado');              
         }
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