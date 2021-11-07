<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->softDeletes();
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('family_name');
			$table->string('national_id')->unique();
			$table->string('birth_address');
			$table->datetime('birth_date');
			$table->datetime('join_date');
			$table->enum('gender', array('ذكر', 'انثي'))->nullable();
			$table->enum('health_status', array('healthy', 'disabled'));
			$table->enum('social_status', array('single', 'married', 'divorced', 'widow'));
			$table->enum('military_treatment', array('Exempted', 'TemporarilyExempt', 'Postponed', 'Finished'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
