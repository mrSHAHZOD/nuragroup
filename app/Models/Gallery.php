<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_eng',
        'img',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
