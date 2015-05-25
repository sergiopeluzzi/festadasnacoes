<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosBebidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos_bebidas', function(Blueprint $table)
		{
            $table->integer('id_pedido')->unsigend();
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');

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
		Schema::drop('pedidos_bebidas');
	}

}
