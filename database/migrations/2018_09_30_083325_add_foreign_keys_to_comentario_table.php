<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comentario', function(Blueprint $table)
		{
			$table->foreign('estudante_id', 'fk_comentario_estudante1')->references('id')->on('estudante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('instituicao_id', 'fk_comentario_instituicao')->references('id')->on('instituicao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comentario', function(Blueprint $table)
		{
			$table->dropForeign('fk_comentario_estudante1');
			$table->dropForeign('fk_comentario_instituicao');
		});
	}

}
