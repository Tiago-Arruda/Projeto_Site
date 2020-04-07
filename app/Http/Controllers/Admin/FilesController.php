<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request; 
use Symfony\Component\HttpFoundation\Response;



class FilesController extends Controller
{
    /**
    * Resolve o envio do arquivo.
    *
    * @param Request $request A instância do request.
    * @return Response A instância da response.
    */
    public function index()
    {
        return view('admin.Upload.upload');
    }    



    //Consulta no Banco  -  
    public function buscar(Request $request)
    {
        $_nome = $request->input('_nome');
        if(!is_null($p_nome)){
        $file = DB::table('files')
            ->where('name', 'like',  "%" . $_nome)
            ->get();
        }else{
            return redirect()
            ->route('admin.Upload.upload')
            ->with('error', 'Preencha o campo de busca Corretamente'); 
        }
        if (!empty($file['0']->id)){

                 $id = $file['0']->id;
                 $id = $status['0']->status;
                 $id = $conteudo['0']->conteudo;
           
             return 
                    view('admin.Upload.upload')->with('file', $file)->with('id',$id);                    
        }else{
            return redirect()
                ->route('admin.Upload.upload')
                ->with('error', 'Registro não encontrado');
            }
          
    }






    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'caminho' => ['required', 'string', 'caminho'],            
        ]);
    }

/**
 * Compara o conteúdo de dois arquivos para verificar se há diferenças.
 *
 * Não verifica qual exatamente é a diferença entre os arquivos. Dessa 
 * forma, uma diferenção é encontrada, a função para de ler os arquivos.
 *
 * @param SplFileInfo $a O primeiro arquivo para comparar.
 * @param SplFileInfo $b O segundo arquivo para comparar.
 * @return bool Indica se há qualquer diferença entre os arquivos.
 */
private function fileDiff($a, $b) 
{
    $diff = false;
    $fa = $a->openFile();
    $fb = $b->openFile();

    /*
     * Lê o mesmo número de bytes de cada arquivo. Quebra (break) o loop 
     * assim que uma diferença for encontrada.
     */
    while (!$fa->eof() && !$fb->eof()) {
        if ($fa->fread(4096) !== $fb->fread(4096)) {
            $diff = true;
            break;
        }
    }

    /*
     * Apenas um dos arquivos chegou ao fim.
     */
    if ($fa->eof() !== $fb->eof()) {
        $diff = true;
    }

    /*
     * Closing handlers.
     */
    $fa = null;
    $fb = null;

    return $diff;
}



    public function uploads(Request $request)
    {
        /*
        * O campo do form com o arquivo tinha o atributo name="file".
        */
        $file = $request->file('file');

        if (empty($file)) {
            abort(400, 'Nenhum arquivo foi enviado.');
        }

/*
         * Já existe um arquivo igual ao que está sendo enviado? 
         * 
         * mudar para varredura no banco
         */
        if ($this->isAlreadyUploaded($file)) {
            abort(400, 'Esse mesmo arquivo já foi enviado antes.');
        }

 /*
         * Apenas grava o arquivo depois da verificação.
         */
        $path = $file->store('uploads');

        // Faça qualquer coisa com o arquivo enviado....
        // implmentar o cadastro o arquivo no banco
        
        ////////////???????????????????????

        

    }




public function atualizadoc(Request $request)
        {
            $id = $request->input('nome');


             // pegar o o valor da atualização a serfeita
            // status do documento, conteudo   e industria 
            // validar qual será atualização- tipo se o campo estiver vazio não atualizar.
            $status = $request->input('status');
            $status = $request->input('status');
            $status = $request->input('status');



            if (!is_null($id)){

                //Validação individual-avaliar se isso vai perder tempo ou pesar o banco
                if (!is_null($status)){
                    DB::table('files')->where('id', $id)->update(array('status'=> $status));                    
                }    
                if (!is_null($status)){
                    DB::table('files')->where('id', $id)->update(array('conteudo'=> $conteudo));                    
                }  
                if (!is_null($status)){
                    DB::table('files')->where('id', $id)->update(array('industria'=> $industria));                    
                }    

                //DB::table('files')->where('id', $id)->update(array('status'=> $status,'conteudo'=> $conteudo,'industria'=> $industria,));

                return redirect()
                    ->route('admin.uploads.upload')
                    ->with('success', 'Documento atualizado com sucesso!');

            }else{

                return redirect()
                    ->route('admin.uploads.upload')
                    ->with('error', 'Ocorreu um erro');

            }

    }

}