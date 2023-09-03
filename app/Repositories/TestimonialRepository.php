<?php

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository
{
    public function getAllSorted()
    {
        return Testimonial::all()->sortBy('sort');
    }
}
