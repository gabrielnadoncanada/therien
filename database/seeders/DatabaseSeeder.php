<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::insert(
            array(
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            )
        );

//        $services = \App\Models\Service::insert(array(
//                array(
//                    'title' => "Déneigement",
//                    'content' => "L’hiver peut apporter des défis majeurs à votre entreprise. Chez Thérien, spécialistes en déneigement commercial, nous vous aidons à faire face à ces défis avec notre gamme complète de services de déneigement.",
//                ),
//                array(
//                    'title' => "Transport en vrac",
//                    'content' => "Simplifiez votre projet avec notre service de transport en vrac. Livraison de matériaux de paysage directement sur votre site.",
//                ),
//                array(
//                    'title' => "Asphaltage",
//                    'content' => "Offrez une nouvelle vie à vos allées avec notre service d'asphaltage. Pour un extérieur qui combine allure et praticité.",
//                ),
//                array(
//                    'title' => "Excavation",
//                    'content' => "Laissez-nous jeter les bases de votre projet avec notre service d'excavation. La précision et l'efficacité pour des travaux de grande envergure.",
//                ),
//                array(
//                    'title' => "Tourbe",
//                    'content' => "Créez l'attrait d'un gazon luxuriant avec notre tourbe de qualité supérieure. Faites ressortir la beauté naturelle de votre propriété.",
//                ),
//                array(
//                    'title' => "Pavé uni",
//                    'content' => "Offrez une touche d'élégance à votre extérieur avec notre pavé uni. Pour des espaces extérieurs qui combinent esthétique et durabilité.",
//                ),
//            )
//        );
//
//        \App\Models\Testimonial::insert(array(
//            array(
//                'title' => "Benoit Marcotte",
//                'content' => "Merci beaucoup pour ce travail professionnel!",
//
//            ),
//            array(
//                'title' => "Marie Normandin",
//                'content' => "WoW! Bravo à toute l’équipe!",
//
//            ),
//            array(
//                'title' => "Julie Nathan",
//                'content' => "Votre travail est tout simplement incroyable. J’adore !",
//
//            ),
//            array(
//                'title' => "Benoit Marcotte",
//                'content' => "Merci beaucoup pour ce travail professionnel!",
//
//            ),
//            array(
//                'title' => "Marie Normandin",
//                'content' => "WoW! Bravo à toute l’équipe!",
//
//            ),
//            array(
//                'title' => "Julie Nathan",
//                'content' => "Votre travail est tout simplement incroyable. J’adore !",
//
//            ),
//        ),
//        );
//
//
//        $partners = \App\Models\Partner::insert(array(
//            array(
//                'title' => "Groupe Richer",
//            ),
//            array(
//                'title' => "Blocs Mirabel",
//            ),
//            array(
//                'title' => "Bloc Pavé",
//            ),
//            array(
//                'title' => "Pétrole Bélanger",
//            ),
//            array(
//                'title' => "Permacon",
//            ),
//            array(
//                'title' => "Techno Bloc",
//            ),
//            array(
//                'title' => "J.René Lafond",
//            ),
//            array(
//                'title' => "Gazon Ethier",
//            )
//        ));
//
//        $partners = \App\Models\Partner::orderBy('id', 'desc')->get();
//
//        $partners_images = [
//            "groupe-richer.png",
//            "bloc-mirabel.png",
//            "bloc-pave.png",
//            "petrole-belanger.png",
//            "permacon.png",
//            "techno-block.png",
//            "j-rene-lafond.png",
//            "gazon-ethier.png",
//        ];
//
//        foreach ($partners as $index => $partner) {
//            // Path to your image, adjust as needed
//            $imagePath = storage_path('app/public/' . $partners_images[$index]);
//
//            // Attach the image to the achievement
//            $partner->addMedia($imagePath)->preservingOriginal()
//                ->toMediaCollection('partners-images');
//        }
//
//        $titlesAchievement = ["1", "2", "3", "4", "5", "6", "7"];
//        $achievementsData = array_map(function ($titlesAchievement) {
//            return ['title' => $titlesAchievement, 'is_featured' => false];
//        }, $titlesAchievement);
//
//        $achievementsData[0]['is_featured'] = true;
//        $achievementsData[1]['is_featured'] = true;
//        $achievementsData[2]['is_featured'] = true;
//
//        Achievement::insert($achievementsData);
//
//        $achievements = Achievement::orderBy('id', 'desc')->get();
//
//        foreach ($achievements as $index => $achievement) {
//            // Path to your image, adjust as needed
//            $imagePath = storage_path('app/public/gallery' . $index + 1 . '.png');
//
//            // Attach the image to the achievement
//            $achievement->addMedia($imagePath)->preservingOriginal()
//                ->toMediaCollection('achievements-images');
//
//            // Path to your image, adjust as needed
//            $imagePath1 = storage_path('app/public/project.png');
//            $imagePath2 = storage_path('app/public/project2.png');
//
//            $achievement->addMedia($imagePath1)->preservingOriginal()
//                ->toMediaCollection('achievements-featured-images-before');
//            $achievement->addMedia($imagePath2)->preservingOriginal()
//                ->toMediaCollection('achievements-featured-images-after');
//        }

        Cache::forget('frontpage_services');
        Cache::forget('frontpage_testimonials');
        Cache::forget('frontpage_achievements');
        Cache::forget('frontpage_partners');
    }
}
