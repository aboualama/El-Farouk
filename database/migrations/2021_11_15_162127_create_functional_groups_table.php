<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFunctionalGroupsTable extends Migration {

	public function up()
	{
		Schema::create('functional_groups', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('functional_groups');
	}
}