<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
	public function up()
	{
		Schema::create('languages', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('code');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('languages');
	}
}
