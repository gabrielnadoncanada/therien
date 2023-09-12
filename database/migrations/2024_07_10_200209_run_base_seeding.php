<?php

use App\Models\Achievement;
use App\Models\Project;
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
            ),
            array(
                'title' => "Blocs Mirabel",
            ),
            array(
                'title' => "Bloc Pavé",
            ),
            array(
                'title' => "Pétrole Bélanger",
            ),
            array(
                'title' => "Permacon",
            ),
            array(
                'title' => "Techno Bloc",
            ),
            array(
                'title' => "J.René Lafond",
            ),
            array(
                'title' => "Gazon Ethier",
            )
        ));


        $partners = \App\Models\Partner::orderBy('id', 'desc')->get();

        $partners_images = [
            "groupe-richer.png",
            "bloc-mirabel.png",
            "bloc-pave.png",
            "petrole-belanger.png",
            "permacon.png",
            "techno-block.png",
            "j-rene-lafond.png",
            "gazon-ethier.png",
        ];

        foreach ($partners as $index => $partner) {
            // Path to your image, adjust as needed
            $imagePath = storage_path('app/public/' . $partners_images[$index]);

            // Attach the image to the achievement
            $partner->addMedia($imagePath)->preservingOriginal()
                ->toMediaCollection('partners-images');
        }


        $titles = ["1", "2", "3", "4", "5"];
        $projectsData = array_map(function ($title) {
            return ['title' => $title];
        }, $titles);

        Project::insert($projectsData);

        $projects = Project::orderBy('id', 'desc')->get();

        foreach ($projects as $index => $project) {
            // Path to your image, adjust as needed
            $imagePath1 = storage_path('app/public/project.png');
            $imagePath2 = storage_path('app/public/project2.png');

            // Attach the image to the achievement
            $project->addMedia($imagePath1)->preservingOriginal()
                ->toMediaCollection('projects-images');
            $project->addMedia($imagePath2)->preservingOriginal()
                ->toMediaCollection('projects-images');
        }


        $titlesAchievement = ["1", "2", "3", "4", "5", "6", "7"];
        $achievementsData = array_map(function ($titlesAchievement) {
            return ['title' => $titlesAchievement];
        }, $titlesAchievement);

        Achievement::insert($achievementsData);

// If you want to attach images to these achievements:
        $achievements = Achievement::orderBy('id', 'desc')->get();

        foreach ($achievements as $index => $achievement) {
            // Path to your image, adjust as needed
            $imagePath = storage_path('app/public/gallery' . $index + 1 . '.png');

            // Attach the image to the achievement
            $achievement->addMedia($imagePath)->preservingOriginal()
                ->toMediaCollection('achievements-images');
        }

        Cache::forget('frontpage_services');
        Cache::forget('frontpage_testimonials');
        Cache::forget('frontpage_projects');
        Cache::forget('frontpage_partners');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
