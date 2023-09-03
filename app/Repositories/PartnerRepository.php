<?php

namespace App\Repositories;

use App\Models\Partner;

class PartnerRepository
{
    public function getAllSorted()
    {
        return Partner::all()->sortBy('sort');
    }
}
