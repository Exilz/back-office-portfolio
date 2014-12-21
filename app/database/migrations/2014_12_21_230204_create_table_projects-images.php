<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjectsImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects-images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('src');
			$table->string('caption');
			$table->string('alt');
			$table->integer('project-id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects-images');
	}

}
