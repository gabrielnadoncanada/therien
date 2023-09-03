<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    public function getAllSorted()
    {
        return Service::all()->sortBy('sort');
    }
}
