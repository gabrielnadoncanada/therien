<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostMetadataTable extends Migration
{
	public function up()
	{
		// Schema::create('post_metadata', function (Blueprint $table) {
		// 	$table->id();
		// 	$table->unsignedBigInteger('post_id');
		// 	$table->unsignedBigInteger('language_id');
		// 	$table->timestamp('scheduled_date')->nullable();
		// 	$table->string('slug');
		// 	$table->string('title');
		// 	$table->string('status');
		// 	$table->string('featured_image')->nullable();
		// 	$table->timestamps();
		// 	$table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
		// 	$table->foreign('post_id')->references('id')->on('blog_posts')->onDelete('cascade');
		// });
	}

	public function down()
	{
		// Schema::dropIfExists('post_metadata');
	}
}
