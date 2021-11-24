<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenceAddressTable extends Migration {

	public function up()
	{
		Schema::create('residence_address', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('residence_address');
			$table->string('residence_center');
			$table->string('residence_city');
			$table->foreignId('employee_id');
		});
	}

	public function down()
	{
		Schema::drop('residence_address');
	}
}
