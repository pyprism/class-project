<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allocations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('supervisor_id')->unsigned();
            $table->integer('second_marker_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('users')->nullable();
            $table->foreign('second_marker_id')->references('id')->on('users')->nullable();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('allocations');
	}

}
