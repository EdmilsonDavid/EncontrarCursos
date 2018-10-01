<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursossugeridosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursossugeridos', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'fk_cursosSugeridos_curso1')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('estudante_id', 'fk_cursosSugeridos_estudante1')->references('id')->on('estudante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursossugeridos', function(Blueprint $table)
		{
			$table->dropForeign('fk_cursosSugeridos_curso1');
			$table->dropForeign('fk_cursosSugeridos_estudante1');
		});
	}

}
