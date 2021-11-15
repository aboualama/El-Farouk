<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobFunctionsTable extends Migration {

	public function up()
	{
		Schema::create('job_functions', function(Blueprint $table) {
			$table->id();
			$table->timestamps(); 
			$table->string('name');
			$table->foreignId('sub_group_id')->onUpdate('cascade')->onDelete('cascade'); 
		});
	}

	public function down()
	{
		Schema::drop('job_functions');
	}
}