<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursoHasCadeiraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('curso_has_cadeira', function(Blueprint $table)
		{
			$table->foreign('cadeira_id', 'fk_curso_has_cadeira_cadeira1')->references('id')->on('cadeira')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('curso_id', 'fk_curso_has_cadeira_curso1')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('curso_has_cadeira', function(Blueprint $table)
		{
			$table->dropForeign('fk_curso_has_cadeira_cadeira1');
			$table->dropForeign('fk_curso_has_cadeira_curso1');
		});
	}

}
