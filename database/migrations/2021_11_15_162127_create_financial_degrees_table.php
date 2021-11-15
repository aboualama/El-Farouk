<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinancialDegreesTable extends Migration {

	public function up()
	{
		Schema::create('financial_degrees', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name');
			$table->string('code');
		});
	}

	public function down()
	{
		Schema::drop('financial_degrees');
	}
}