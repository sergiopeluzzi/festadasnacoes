<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosPratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos_pratos', function(Blueprint $table)
		{
			$table->integer('id_pedido')->unsigend();
            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');

            $table->integer('id_prato');
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
		Schema::drop('pedidos_pratos');
	}

}
