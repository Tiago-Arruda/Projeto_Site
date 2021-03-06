<?php

namespace App\Http\Controllers\Admin;

use App\Documentos;
use Illuminate\Http\Request;
use App\Http\Requests\FilesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


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
    public function buscar()
    {       
        return view('admin.Upload.busca');  
    }

    public function search(Request $request)
    {
        $_nome = $request->input('_nome');
        $_conteudo = $request->input('_conteudo');
        
        if ((is_null($_nome))and(is_null($_conteudo))){
            return redirect()
            ->route('admin.Upload.busca')
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

                                            /* if((!is_null($_nome))){
                                                $file = DB::table('files')
                                                    ->where('name', 'like',  "%" . $_nome)
                                                    ->get();
                                                }else{
                                                    return redirect()
                                                    ->route('admin.Upload.upload')
                                                    ->with('error', 'Preencha o campo de busca Corretamente'); 
                                                }
                                                */       
            
            if (!empty($file['0']->id)){
                    $id = $file['0']->id;                            
                return 
                        view('admin.Upload.busca')->with('file', $file)->with('id',$id);                    
            }else{

                return redirect()
                ->route('admin.Upload.busca')
                ->with('error', 'Registro não encontrado - Tente  Novamente'); 
                }
          
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //protected function validator(array $data)
    //{
   //     return Validator::make($data, [
   //         'name' => ['required', 'string', 'max:100'],
    //        'caminho' => ['required', 'string', 'caminho'],            
    //    ]);
   // }

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


/**
 * Check if the given file was already uploaded.
 *
 * It loops through all files in the uploads directory, looking for anyone that 
 * could be equal to the currently uploaded file.
 *
 * @param  SplFileInfo $file The file to check.
 * @return bool Indicates if the file was already upload.
 */
private function isAlreadyUploaded($file)  
{
    
    $size = $file->get_size();

    /*
     * The directory where the files are stored.
     */
    $path = storage_path('storage\app\uploads'); //storage\app\uploads  app/uploads/

    if (!is_dir($path)) {
        return false;
    }

    $files = scandir($path);
    foreach ($files as $f) {
        $filePath = $path . $f;
        if (!is_file($filePath)) {
            continue;
        }

        /*
         * If both files have the same size, check their contents.
         */
        if (filesize($filePath) === $size) {

            /*
             * Check if there are differences using the function we wrote above.
             */
            $diff = $this->fileDiff(new \SplFileInfo($filePath), $file);

            /*
             * Return the files are not different, meaning equal, that is 
             * already uploaded.
             */
            return !$diff;
        }
    }
    return false;
}





    public function uploads(Request $request)
    {
      
      /*
        * O campo do form com o arquivo tinha o atributo name="file".
        */
        $filetemp = $request->file('file');
        //$formupload = $request->form('formupload');        
        // Se informou o arquivo, retorna um boolean        
        $filetemph = $request->hasFile('file');
        // Se é válido, retorna um boolean
        $filetempb = $request->file('file')->isValid();        
        // Retorna o nome original do arquivo
        $nomearq = $request->file->getClientOriginalName();
        // Extensão do arquivo
        $tipofile = $request->file->getClientOriginalExtension();
        $extensaoarqv =  $request->file->extension();
        // Tamanho do arquivo
        //$tamanho = $request->imagem->getClientSize();
        $type = $request->file->getMimeType();
        
        //verifica se tem arquivo a enviar       
        if (empty($filetemp)) {
            abort(400, 'Nenhum arquivo foi enviado.');
        }
        /*
         * Já existe um arquivo igual ao que está sendo enviado?          
         * mudar para varredura no banco
         */
        //if ($this->isAlreadyUploaded($filetemp)) {
        //    abort(400, 'Esse mesmo arquivo já foi enviado antes.');
       // }
        /*
         * Apenas grava o arquivo depois da verificação.
         */
        //$path = $filetemp->store('uploads'); 
        $upload = $request->file->storeAs('uploads\\', $request->nome.".".$extensaoarqv);  
        //salva no diretorio com o mesmo nome indicado pelo usuario             
          /*
         * Insere no banco. 
         */          
        $files = new Documentos;
        $files->name        = $request->nome;
        $files->tipo = $tipofile;
        $files->caminho    = $upload;
        $files->conteudo       = $request->conteudo;
        $files->Validadedoc       = $request->Validadedoc;
        $files->estado       = $request->estado;
        $files->industria       = $request->industria;
        $files->versao       = $request->versao;     
        $files->save();

        return redirect()->route('home')->with('message', 'Product created successfully!');
   
    }


public function atualizadoc(FilesRequest $request)
        {
            $id = $request->input('nome');


             // pegar o o valor da atualização a serfeita
            // status do documento, conteudo   e industria 
            // validar qual será atualização- tipo se o campo estiver vazio não atualizar.
                $status = $request->input('status');
                $conteudo = $request->input('conteudo');
                $industria = $request->input('status');

            if (!is_null($id)){

                //Validação individual-avaliar se isso vai perder tempo ou pesar o banco
                if (!is_null($status)){
                    DB::table('files')->where('id', $id)->update(array('status'=> $status));                    
                }    
                if (!is_null($conteudo)){
                    DB::table('files')->where('id', $id)->update(array('conteudo'=> $conteudo));                    
                }  
                if (!is_null($industria)){
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