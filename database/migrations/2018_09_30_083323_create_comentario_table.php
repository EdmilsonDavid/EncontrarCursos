<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentario', function(Blueprint $table)
		{
			$table->string('comentarios', 80);
			$table->integer('id', true);
			$table->integer('instituicao_id')->index('fk_comentario_instituicao_idx');
			$table->integer('estudante_id')->index('fk_comentario_estudante1_idx');
			$table->primary(['id','instituicao_id','estudante_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comentario');
	}

}
