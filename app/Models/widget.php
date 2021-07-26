<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class widget extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'widgets';
    protected $fillable = [
        'name',
        'subTitle',
        'title',
        'type',
        'kind',
        'path'
];

}
