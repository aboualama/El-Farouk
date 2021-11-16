<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobStylesTable extends Migration {

	public function up()
	{
		Schema::create('job_styles', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('title');
		});
	}

	public function down()
	{
		Schema::drop('job_styles');
	}
}