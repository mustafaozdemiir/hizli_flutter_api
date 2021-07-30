<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class question extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'questions';
    protected $fillable = [
        'heading',
        'answer',
        'answers',
        'point',
        'time',
        'difficulty'
];
}
