<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstituicoesmaisprocuradasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituicoesmaisprocuradas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('instituicao_id');
			$table->integer('instituicao_provincia_id');
			$table->primary(['id','instituicao_id','instituicao_provincia_id']);
			$table->index(['instituicao_id','instituicao_provincia_id'], 'fk_instituicoesMaisProcuradas_instituicao1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instituicoesmaisprocuradas');
	}

}
