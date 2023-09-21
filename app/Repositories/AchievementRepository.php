<?php

namespace App\Repositories;

use App\Models\Achievement;

class AchievementRepository
{
    public function getAllSorted()
    {
        return Achievement::all()->sortBy('sort');
    }
}
