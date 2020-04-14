<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //

    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';

}
