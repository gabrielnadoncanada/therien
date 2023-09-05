<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostRevisionsTable extends Migration
{
	public function up()
	{
		// Schema::create('post_revisions', function (Blueprint $table) {
		// 	$table->id();
		// 	$table->unsignedBigInteger('post_metadata_id');
		// 	$table->text('content');
		// 	$table->timestamps();
		// 	$table->foreign('post_metadata_id')->references('id')->on('post_metadata')->onDelete('cascade');
		// });
	}

	public function down()
	{
		// Schema::dropIfExists('post_revisions');
	}
}
