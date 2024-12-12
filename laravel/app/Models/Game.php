<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'url',
        'youtube',
        'embed',
        'width',
        'height',
        'thumb1',
        'thumb2',
        'thumb3',
        'thumb4',
        'thumb5',
        'thumb6',
        'thumb7',
        'thumb8',
    ];
}
