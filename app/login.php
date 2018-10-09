<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table="login";
    public function buscarDadosLogin(){
        return $this->hash('App\login','login_id');
    }
}
