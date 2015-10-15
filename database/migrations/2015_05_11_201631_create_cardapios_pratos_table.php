<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardapiosPratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapios_pratos', function(Blueprint $table)
		{
			$table->integer('id_cardapio')->unsigned();
            $table->foreign('id_cardapio')->references('id')->on('cardapios')->onDelete('cascade');

            $table->integer('id_prato')->unsigned();
            $table->foreign('id_prato')->references('id')->on('pratos')->onDelete('cascade');

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
		Schema::drop('cardapios_pratos');
	}

}
