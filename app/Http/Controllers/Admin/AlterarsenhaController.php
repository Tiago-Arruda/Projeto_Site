<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

use App\Http\Controllers\Admin;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\session;

class AlterarsenhaController extends Controller
{
   
   
    
    public function index()
    {
        return view('admin.alterar.senha');
    }

    public function updateOwn(Request $request)
    {

        $input = $request->all();
        
        

        $validator = Validator::make($request->all(), [
            
            'password'   => ["required",'min:6',  
            'confirmed'],
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect('admin/alterar')
                ->withErrors($validator)
                ->withInput();
        }
        $id =  Auth::user()->id;
        $user = Auth::user()->name;

        $input['password'] = bcrypt($input['password']);//criptografa password

        DB::table('users')->where('id', $id)->update(array('password'=> $input['password'],));

       // $user->update($input);
       Session::flash ('flash_success','Usuário atualizado com sucesso. - '.Auth::user()->name);//flash message teste
        return redirect()
        ->route('alterar.senha')
        ->with('success', 'Senha alterada com sucesso!');
    }

    
 
      
}

//criado e add por @tiago, para ser o controller de cadastro.