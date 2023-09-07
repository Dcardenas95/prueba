<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'year_publication',
        'category',
    ];

    public function loans()
    {
        return $this->belongsToMany(Loan::class);
    }
}
