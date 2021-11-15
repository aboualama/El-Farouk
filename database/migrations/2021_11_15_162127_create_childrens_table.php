<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChildrensTable extends Migration {

	public function up()
	{
		Schema::create('childrens', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->enum('gender', array('male', 'female'));
			$table->datetime('birth_date'); 
			$table->foreignId('employee_id')->onUpdate('cascade')->onDelete('cascade'); 
		});
	}

	public function down()
	{
		Schema::drop('childrens');
	}
}