<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursossugeridosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursossugeridos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('curso_id')->index('fk_cursosSugeridos_curso1_idx');
			$table->integer('estudante_id')->index('fk_cursosSugeridos_estudante1_idx');
			$table->primary(['id','curso_id','estudante_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursossugeridos');
	}

}
