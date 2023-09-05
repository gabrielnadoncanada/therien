<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'tel',
        'message'
    ];

    use HasFactory;
}
