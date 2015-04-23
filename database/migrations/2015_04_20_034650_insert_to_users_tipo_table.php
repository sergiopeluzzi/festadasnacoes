<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertToUsersTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_tipo', function(Blueprint $table)
		{
            DB::table('users_tipo')->insert([
                ['descricao' => 'Administrador', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['descricao' => 'Funcionario', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['descricao' => 'Cliente', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            ]);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_tipo', function(Blueprint $table)
		{
            DB::table('users_tipo')->where('descricao', '=', 'Administrador')->delete();
            DB::table('users_tipo')->where('descricao', '=', 'Funcionario')->delete();
            DB::table('users_tipo')->where('descricao', '=', 'Cliente')->delete();

		});
	}

}
