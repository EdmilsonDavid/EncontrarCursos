<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursosrelacionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursosrelacionados', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'fk_cursosRelacionados_curso1')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('curso_id1', 'fk_cursosRelacionados_curso2')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursosrelacionados', function(Blueprint $table)
		{
			$table->dropForeign('fk_cursosRelacionados_curso1');
			$table->dropForeign('fk_cursosRelacionados_curso2');
		});
	}

}
