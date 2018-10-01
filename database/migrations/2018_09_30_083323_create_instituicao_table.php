<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstituicaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituicao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 45);
			$table->string('descricao', 45);
			$table->string('email', 45);
			$table->string('logoTipo', 45)->nullable();
			$table->integer('provincia_id')->index('fk_instituicao_provincia1_idx');
			$table->integer('login_id')->index('fk_instituicao_login1_idx');
			$table->primary(['id','provincia_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instituicao');
	}

}
