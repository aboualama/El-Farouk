<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeQualificationTable extends Migration {

	public function up()
	{
		Schema::create('employee_qualification', function(Blueprint $table) {
			$table->id();
			$table->timestamps(); 
			$table->softDeletes(); 
			$table->string('qualification_date');
			$table->enum('qualification_round', ['أول', 'ثاني']);
			$table->string('qualification_degree');
			$table->string('qualification_major');
			$table->string('qualification_source');
			$table->foreignId('employee_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete(); 
			$table->foreignId('qualification_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete(); 
		});
	}

	public function down()
	{
		Schema::drop('employee_qualification');
	}
}