<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobHistoryTable extends Migration {

	public function up()
	{
		Schema::create('job_history', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->softDeletes();
			$table->datetime('date'); 
			$table->datetime('degree_date');
			$table->enum('cadre', array('public', 'private'));
			$table->enum('job_status', array('working', 'notworking')); 
			$table->foreignId('employee_id')->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('job_function_id')->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('financial_degree_id')->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('nomination_type_id')->onUpdate('cascade')->onDelete('cascade');
			$table->foreignId('job_style_id')->onUpdate('cascade')->onDelete('cascade'); 
		});
	}

	public function down()
	{
		Schema::drop('job_history');
	}
}