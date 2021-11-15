<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhonesTable extends Migration {

	public function up()
	{
		Schema::create('phones', function(Blueprint $table) {
			$table->id();
			$table->timestamps(); 
			$table->string('number');
			$table->foreignId('employee_id')->onUpdate('cascade')->onDelete('cascade'); 
		});
	}

	public function down()
	{
		Schema::drop('phones');
	}
}