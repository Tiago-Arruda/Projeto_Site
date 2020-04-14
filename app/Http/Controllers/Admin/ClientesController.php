<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use App\Http\Requests\FilesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use App\User;
use App\Http\Controllers\Admin;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Clientes;



class ClientesController extends Controller
{

    public function index()
    {


        return view('admin.clientes.clientes');


    }   
    
    //


    /**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */

    public function iserir(Request $request)
    {
        $_nomecliente = $request->input('_nomecliente');
     //verifica se tem arquivo a enviar       
        if (empty($_nomecliente)) {
            abort(400, 'Nenhum texto foi enviado.');
        }
        else{

            $clientes = new Clientes;
            $clientes->name  = $request->_nomecliente;        
            $clientes->save();
    
            return redirect()->route('admin.clientes.clientes')->with('message', 'Cliente created successfully!');
        }    
    }    //
    



    public function pesquisa(Request $request)
    {
        $nome = $request->_nome;
        
        $cliente = DB::table('clientes')
        ->where('name', 'like',  "%" . $nome)
        ->get();  
        
        
        if (!empty($cliente['0']->id)){                        
            $id = $cliente['0']->id;
            return 
                view('admin.clientes.clientes')->with('clientes', $cliente)->with('id',$id);                            
            }else{
                return redirect()
                    ->route('home')
                    ->with('error', 'Registro não encontrado');
        }


    }   

}
