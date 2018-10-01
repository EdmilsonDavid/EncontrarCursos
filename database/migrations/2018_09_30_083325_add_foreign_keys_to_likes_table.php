<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('likes', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'fk_likes_curso1')->references('id')->on('curso')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('estudante_id', 'fk_likes_estudante1')->references('id')->on('estudante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('likes', function(Blueprint $table)
		{
			$table->dropForeign('fk_likes_curso1');
			$table->dropForeign('fk_likes_estudante1');
		});
	}

}
