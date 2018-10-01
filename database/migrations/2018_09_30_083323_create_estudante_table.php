<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudante', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 45);
			$table->string('morada', 45);
			$table->string('nacionalidade', 45);
			$table->string('naturalidade', 45);
			$table->string('telefone', 45);
			$table->string('email', 45);
			$table->integer('login_id')->index('fk_estudante_login1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudante');
	}

}
