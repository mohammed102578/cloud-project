<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('documents', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->date('Exp_date');		
			$table->text('description');
			$table->string('type', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('documents');
	}
}