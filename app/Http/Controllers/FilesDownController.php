<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use Illuminate\Support\Facades\DB;

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
        $_nome = 'primeiro'; // $request->input('_nome');
        $_conteudo = '';// $request->input('_conteudo');
        $file = DB::table('files')
                    ->where('conteudo', 'like',  "%" . $_conteudo)
                    ->get();                    
        $id = $file['0']->id;                            
        return view('users.downloads.down')->with('file', $file)->with('id',$id);                           
        
    }    


   //fim da controller 
}