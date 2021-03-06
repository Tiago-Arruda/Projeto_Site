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

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


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
        $isadmin = Auth::user()->isadmin; 
        
            if($isadmin=='1'){      
                $file = DB::table('files')->paginate(5);            
            }else 
                {
                    if (is_null($industriaUsers)){
                        return redirect()
                        ->route('home')
                        ->with('error', 'Verifique com o Administrador'); 
                    }else     
                    {
                     $file = DB::table('files')->where('industria', 'like', $industriaUsers)->paginate(3);            
                    }
                }



            //Retonar os valores para view
            if (!empty($file['0']->id)){                                
                 return  view('users.downloads.down', compact('file', $file));                       
            }else{
                return redirect()
                    ->route('home')
                    ->with('error', 'Registro não encontrado');
            }                                
    }   
    
/**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */
   
        public function show(Request $request)
        {
            $_id = $request->input('_idfile');                        
            //verificar a id enviada
            if (is_null($_id)){
                dd('Erro');
            }
            else 
            {
                $fileDow = DB::table('files')
                ->where('id', $_id)
                ->get();
            }
            //baixar       
            if (!empty($fileDow['0']->id)){
                    $caminho = $fileDow['0']->caminho;                            
                    //$path = $filetemp->store('uploads'); 
                    $file= public_path(). "\\storage\\".$caminho; 
                    return response()->download($file);                    
                    //return response()->download($caminho); //Storage::download('file.jpg', $caminho);  storage\uploads\                  
            }else{
                return redirect()
                ->route('users.downloads.down')
                ->with('error', 'Registro não encontrado - Tente  Novamente'); 
            }


            //return view('home');
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