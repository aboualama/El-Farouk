<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubGroupsTable extends Migration {

	public function up()
	{
		Schema::create('sub_groups', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name'); 
			$table->foreignId('functional_group_id')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('sub_groups');
	}
}