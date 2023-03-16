<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiesTable extends Migration {

	public function up()
	{
		Schema::create('custodies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('custody_type', 255);
			$table->integer('serial_number');
			$table->date('received_date');		
			$table->date('date_of_eviction');		
			$table->integer('status');
			$table->text('description');
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('custodies');
	}
}