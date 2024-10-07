<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'author',
        'isbn',
        'description',
        'cover_image',
        'available_copies',
    ];

}
