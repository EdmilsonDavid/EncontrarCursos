<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoHasCadeiraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso_has_cadeira', function(Blueprint $table)
		{
			$table->integer('curso_id')->index('fk_curso_has_cadeira_curso1_idx');
			$table->integer('cadeira_id')->index('fk_curso_has_cadeira_cadeira1_idx');
			$table->primary(['curso_id','cadeira_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso_has_cadeira');
	}

}
