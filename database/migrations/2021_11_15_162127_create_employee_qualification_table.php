<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeeQualificationTable extends Migration {

	public function up()
	{
		Schema::create('employee_qualification', function(Blueprint $table) {
			$table->id();
			$table->timestamps(); 
			$table->datetime('qualification_date');
			$table->enum('qualification_round', array('first', 'second'));
			$table->string('qualification_degree');
			$table->string('qualification_major');
			$table->string('qualification_source');
			$table->foreignId('employee_id')->onUpdate('cascade')->onDelete('cascade'); 
			$table->foreignId('qualification_id')->onUpdate('cascade')->onDelete('cascade'); 
		});
	}

	public function down()
	{
		Schema::drop('employee_qualification');
	}
}