<?php

namespace App\Repositories;

use App\Models\Achievement;

class AchievementRepository
{
    public function getAllSorted()
    {
        return Achievement::all()->sortBy('sort');
    }

    public function getAllFeatured()
    {
        return Achievement::where('is_featured', true)->get();
    }
}
