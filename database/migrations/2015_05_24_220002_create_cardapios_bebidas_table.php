<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardapiosBebidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapios_bebidas', function(Blueprint $table)
		{
			$table->integer('id_cardapio')->unsigned();
            $table->foreign('id_cardapio')->references('id')->on('cardapio')->onDelete('cascade');

            $table->integer('id_bebida')->unsigned();
            $table->foreign('id_bebida')->references('id')->on('bebidas')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardapios_bebidas');
	}

}
