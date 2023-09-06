<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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

        $services = \App\Models\Service::insert(array(
                array(
                    'title' => "Déneigement",
                    'content' => "L’hiver peut apporter des défis majeurs à votre entreprise. Chez Thérien, spécialistes en déneigement commercial, nous vous aidons à faire face à ces défis avec notre gamme complète de services de déneigement.",
                ),
                array(
                    'title' => "Transport en vrac",
                    'content' => "Simplifiez votre projet avec notre service de transport en vrac. Livraison de matériaux de paysage directement sur votre site.",
                ),
                array(
                    'title' => "Asphaltage",
                    'content' => "Offrez une nouvelle vie à vos allées avec notre service d'asphaltage. Pour un extérieur qui combine allure et praticité.",
                ),
                array(
                    'title' => "Excavation",
                    'content' => "Laissez-nous jeter les bases de votre projet avec notre service d'excavation. La précision et l'efficacité pour des travaux de grande envergure.",
                ),
                array(
                    'title' => "Tourbe",
                    'content' => "Créez l'attrait d'un gazon luxuriant avec notre tourbe de qualité supérieure. Faites ressortir la beauté naturelle de votre propriété.",
                ),
                array(
                    'title' => "Pavé uni",
                    'content' => "Offrez une touche d'élégance à votre extérieur avec notre pavé uni. Pour des espaces extérieurs qui combinent esthétique et durabilité.",
                ),
            )
        );


        \App\Models\Testimonial::insert(array(
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
            array(
                'title' => "Julie Nathan",
                'content' => "Votre travail est tout simplement incroyable. J’adore !",
                'rating' => 5,
                'image' => "https://placehold.co/111x111",
            ),
        ),
        );


        $partners = \App\Models\Partner::insert(array(
            array(
                'title' => "Groupe Richer",
                'image' => "groupe-richer.png"
            ),
            array(
                'title' => "Blocs Mirabel",
                 'image' => "bloc-mirabel.png"
            ),
            array(
                'title' => "Bloc Pavé",
                 'image' => "bloc-pave.png"
            ),
            array(
                'title' => "Pétrole Bélanger",
                 'image' => "petrole-belanger.png"
            ),
            array(
                'title' => "Permacon",
                 'image' => "permacon.png"
            ),
            array(
                'title' => "Techno Bloc",
                 'image' => "techno-block.png"
            ),
            array(
                'title' => "J.René Lafond",
                 'image' => "j-rene-lafond.png"
            ),
            array(
                'title' => "Gazon Ethier",
                 'image' => "gazon-ethier.png"
            )
        ));




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
