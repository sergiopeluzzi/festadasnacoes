<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardapiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapios', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_evento')->unsigned();
            $table->string('descricao');
            $table->timestamps();

            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardapios');
	}

}
