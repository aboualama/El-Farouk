<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeacherDegreesTable extends Migration {

	public function up()
	{
		Schema::create('teacher_degrees', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('title');
		});
	}

	public function down()
	{
		Schema::drop('teacher_degrees');
	}
}