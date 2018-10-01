<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInstituicoesmaisprocuradasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instituicoesmaisprocuradas', function(Blueprint $table)
		{
			$table->foreign('instituicao_id', 'fk_instituicoesMaisProcuradas_instituicao1')->references('id')->on('instituicao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('instituicoesmaisprocuradas', function(Blueprint $table)
		{
			$table->dropForeign('fk_instituicoesMaisProcuradas_instituicao1');
		});
	}

}
