<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudante;
use App\login;

class estudanteControlo extends Controller
{
    public function index(){

        //vai busacar todos dados do estudante
        $dados= estudante::all();

         return view('visualizarDadosEstudante',compact('dados'));

    }

    public function create(){
        //apresentar a pagina com o formulario de criacao de novo estudante
        return view('paginaprincipal');
    }

    public function store(Request $resquest){
        //gravacao de um novo estudante
        $dadosid= login::all();
         $estudante =new estudante;
         $login = new login;

         $estudante->nome=$resquest->nome;
         $estudante->morada=$resquest->morada;
         $estudante->nacionalidade=$resquest->nacionalidade;
         $estudante->naturalidade=$resquest->naturalidade;
         $estudante->email=$resquest->email;
         $estudante->telefone=$resquest->telefone;
         $estudante->login_id=count($dadosid)+1;
         $login->username=$resquest->username;
         $login->password=$resquest->password;
         $login->nivelDeAcesso=1;

         $login->save();
         $estudante->save();


       return  view('paginasubprincipal');

    }


    public function show($id){


    }

    public function edit($id){
        //apresentar um formulario para editar um estudante
        //(pressupoe a apresentar dados do estudante no formulario)

    }

    public function update(Request $resquest, $id){

        //actualizacao dos dados do estudante na base de dados (depois de editar)
    }

      public function destroy($id){
//Eliminar um estudante na base de dados

      }


}
