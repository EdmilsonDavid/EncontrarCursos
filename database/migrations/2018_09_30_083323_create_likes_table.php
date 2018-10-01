<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('likes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('likes');
			$table->integer('numeroLikes')->nullable();
			$table->integer('estudante_id')->index('fk_likes_estudante1_idx');
			$table->integer('curso_id')->index('fk_likes_curso1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('likes');
	}

}
