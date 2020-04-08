<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    //

    protected $fillable = ['name','tipo','caminho','conteudo','Validadedoc',
    'estado','industria','versao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'files';

}
