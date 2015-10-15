<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCollumnIdUsersTipoToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
            Schema::table('users', function($table)
            {
                $table->integer('id_users_tipo')->unsigned();

                $table->foreign('id_users_tipo')->references('id')->on('users_tipo')->onDelete('cascade');
            });
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
            Schema::table('users', function($table)
            {
                $table->dropColumn('id_users_tipo');

                $table->dropForeign('users_id_users_tipo_foreign');
            });
		});
	}

}
