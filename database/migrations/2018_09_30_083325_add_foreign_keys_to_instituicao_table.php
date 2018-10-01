<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInstituicaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instituicao', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_instituicao_login1')->references('id')->on('login')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('provincia_id', 'fk_instituicao_provincia1')->references('id')->on('provincia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('instituicao', function(Blueprint $table)
		{
			$table->dropForeign('fk_instituicao_login1');
			$table->dropForeign('fk_instituicao_provincia1');
		});
	}

}
