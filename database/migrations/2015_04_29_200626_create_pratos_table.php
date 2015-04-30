<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pratos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_nacao')->unsigned();
            $table->string('descricao');
            $table->float('valor');
			$table->timestamps();

            $table->foreign('id_nacao')->references('id')->on('nacoes')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pratos');
	}

}
