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
	    \App\Models\User::insert(
		    array(
			    'name' => 'admin',
			    'email' => 'admin@admin.com',
			    'password' => Hash::make('admin'),
		    )
	    );
//	    \App\Models\Language::insert(
//		    array(
//			    'name' => "FR",
//			    'code' => "fr",
//		    )
//	    );
//	    \App\Models\Language::insert(
//		    array(
//			    'name' => "En",
//			    'code' => "en",
//		    )
//	    );
//
//	    \App\Models\Post::insert(
//		    array(
//			    'order' => 1,
//			    'user_id' => 1,
//		    )
//	    );
//
//	    \App\Models\PostMetadata::insert(
//		    array(
//				'language_id' => 1,
//				'slug' => 'post-1',
//				'title' => 'Post 1',
//				'status' => 'published',
//				'post_id' => 1
//		    )
//	    );


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
