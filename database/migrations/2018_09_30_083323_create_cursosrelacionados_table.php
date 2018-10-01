<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosrelacionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursosrelacionados', function(Blueprint $table)
		{
			$table->integer('curso_id');
			$table->integer('curso_id1')->index('fk_cursosRelacionados_curso2_idx');
			$table->primary(['curso_id','curso_id1']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cursosrelacionados');
	}

}
