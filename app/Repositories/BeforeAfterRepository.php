<?php

namespace App\Repositories;

use App\Models\BeforeAfter;

class BeforeAfterRepository
{
    public function getAllSorted()
    {
        return BeforeAfter::all()->sortBy('sort');
    }
}
