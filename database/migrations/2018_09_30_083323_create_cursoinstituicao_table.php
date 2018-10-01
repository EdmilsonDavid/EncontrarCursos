<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoinstituicaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursoinstituicao', function(Blueprint $table)
		{
			$table->integer('curso_id')->index('fk_curso_has_instituicao_curso1_idx');
			$table->integer('instituicao_id')->index('fk_curso_has_instituicao_instituicao1_idx');
			$table->primary(['curso_id','instituicao_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursoinstituicao');
	}

}
