<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->enum('gender', ['ذكر', 'انثي']);
			$table->enum('health_status', ['سليم', 'ضمن نسبة 5%']);
			$table->enum('social_status', ['اعزب', 'متزوج', 'مطلق', 'ارمل', 'متزوج ويعول', 'مطلق ويعول', 'ارمل ويعول']);
			$table->enum('military_treatment', ['معاف نهائي', 'معاف مؤقت', 'مؤجل تجنيده', 'انهي الخدمة']);
			$table->string('military_summons');
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}