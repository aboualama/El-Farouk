<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNominationTypesTable extends Migration {

	public function up()
	{
		Schema::create('nomination_types', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('title');
		});
	}

	public function down()
	{
		Schema::drop('nomination_types');
	}
}