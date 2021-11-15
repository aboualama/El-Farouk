<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	public function up()
	{
		Schema::create('languages', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name');
			$table->enum('level', array('Beginner', 'Intermediate', 'Proficient', 'Fluent', 'Native')); 
			$table->foreignId('employee_id')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('languages');
	}
}