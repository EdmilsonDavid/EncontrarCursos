<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstudanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estudante', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_estudante_login1')->references('id')->on('login')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estudante', function(Blueprint $table)
		{
			$table->dropForeign('fk_estudante_login1');
		});
	}

}
