<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('subtitle');
			$table->text('desc');
			$table->string('logo');
			$table->string('link');
			$table->integer('video');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
