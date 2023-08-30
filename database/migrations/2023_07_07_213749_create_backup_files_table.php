<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackupFilesTable extends Migration
{
	public function up()
	{
		Schema::create('backup_files', function (Blueprint $table) {
			$table->id();
			$table->string('file_name');
			$table->unsignedBigInteger('size');
			$table->string('url');
			$table->string('path');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('backup_files');
	}
}
