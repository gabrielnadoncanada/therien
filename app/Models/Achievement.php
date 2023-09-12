<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Achievement extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'achievements';


    protected $fillable = [
        'title'
    ];

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('achievements-images')
            ->useDisk('public');
    }
}
