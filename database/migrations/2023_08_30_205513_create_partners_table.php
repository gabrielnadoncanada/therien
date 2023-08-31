<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
	        $table->id();
	        $table->string('title');
//	        $table->string('slug')->unique()->nullable();
//	        $table->longText('content');
	        $table->integer('sort')->nullable();
//	        $table->date('published_at')->nullable();
//	        $table->string('seo_title', 60)->nullable();
//	        $table->string('seo_description', 160)->nullable();
	        $table->string('image')->nullable();
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
