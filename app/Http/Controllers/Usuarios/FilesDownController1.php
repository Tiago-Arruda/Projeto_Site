<?php

namespace App\Http\Controllers\Usuarios;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FilesDownController1 extends Controller
{
    /**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */
    public function index()
    {

        $_nome = 'primeiro'; // $request->input('_nome');
        $_conteudo = '';// $request->input('_conteudo');
        
        if ((is_null($_nome))and(is_null($_conteudo))){
            return redirect()
            ->route('users.dowloads.down')
            ->with('error', 'Preencha o campo de busca Corretamente'); 
            }
            elseif(is_null($_nome)){          
                    $file = DB::table('files')
                    ->where('conteudo', 'like',  "%" . $_conteudo)
                    ->get();
                }elseif(is_null($_conteudo)){
                    $file = DB::table('files')
                    ->where('name', 'like',  "%" . $_nome)
                    ->get();
                }

        if (!empty($file['0']->id)){

                 $id = $file['0']->id;                            
             return 
                    view('users.downloads.down')->with('file', $file)->with('id',$id);                    
        }else{
            return redirect()
                ->route('users.downloads.down')
                ->with('error', 'Contate o Administrador Franco Pasa paraativar seu cadastro!');
            }
          

        return view('users.downloads.down');
    }    


   //fim da controller 
}