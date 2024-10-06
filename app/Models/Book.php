<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $filleable = [
        'title',
        'author',
        'isbn',
        'description',
        'cover_image',
        'available_copies',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
