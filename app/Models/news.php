<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class news extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'news';
    protected $fillable = [
        'heading',
        'subTitle',
        'title',
        'type',
        'kind',
        'titlePicture'
];
}
