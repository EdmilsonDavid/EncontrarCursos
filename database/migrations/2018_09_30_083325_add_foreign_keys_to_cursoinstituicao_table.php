<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursoinstituicaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursoinstituicao', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'fk_curso_has_instituicao_curso1')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('instituicao_id', 'fk_curso_has_instituicao_instituicao1')->references('id')->on('instituicao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursoinstituicao', function(Blueprint $table)
		{
			$table->dropForeign('fk_curso_has_instituicao_curso1');
			$table->dropForeign('fk_curso_has_instituicao_instituicao1');
		});
	}

}
