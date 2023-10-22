<?php

namespace App\Models;

use App\Mail\MessageCreatedMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

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

    protected static function booted()
    {
        static::created(function ($item) {
            Mail::to('info@therieninc.com')->send(new MessageCreatedMail($item));
        });
    }
}
