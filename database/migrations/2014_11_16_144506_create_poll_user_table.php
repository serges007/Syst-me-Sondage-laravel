<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollUserTable extends Migration {

	public function up()
	{
		Schema::create('poll_user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('poll_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('poll_user');
	}
}