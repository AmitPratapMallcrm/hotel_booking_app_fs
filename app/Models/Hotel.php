<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Hotel extends Model
{
    use HasFactory;
     protected $fillable = [
        'hotel_name',
        'email',
        'location',
        'availability',
        'phonenumber',
        'availroom',
        'wifi',
        'user_id'
    ];
}
