<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_eng',
        'content_uz', 
        'content_ru',
        'content_eng',
        'img',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
