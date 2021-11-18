<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('family_name');
			$table->string('national_id')->unique();
			$table->string('birth_address');
			$table->string('birth_city');
			$table->datetime('birth_date');
			$table->datetime('join_date');   
			$table->string('military_summons');
			$table->foreignId('gender_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignId('health_status_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignId('social_status_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
			$table->foreignId('military_treatment_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}