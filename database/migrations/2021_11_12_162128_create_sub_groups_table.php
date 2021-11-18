<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGroupsTable extends Migration {

	public function up()
	{
		Schema::create('sub_groups', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->integer('code');
			$table->foreignId('functional_group_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete(); 
		});
	}

	public function down()
	{
		Schema::drop('sub_groups');
	}
}