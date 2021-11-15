<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQualificationsTable extends Migration {

	public function up()
	{
		Schema::create('qualifications', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('qualification_name');
		});
	}

	public function down()
	{
		Schema::drop('qualifications');
	}
}