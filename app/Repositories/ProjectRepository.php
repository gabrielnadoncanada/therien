<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public function getAllSorted()
    {
        return Project::all()->sortBy('sort');
    }
}
