<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'expiration _date',
        'status',
        'book_id',
        'user_id',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'expiration _date' => 'datetime'
    ];

}
