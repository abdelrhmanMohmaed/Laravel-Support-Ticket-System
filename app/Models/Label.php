<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Label extends Model
{    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'is_visible'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class);
    }
}
