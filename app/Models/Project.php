<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
        protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'description',
        'featured_image',
        'project_date',
        'is_upcoming',
        'is_featured',
    ];
    
    protected $with = ['images'];
    //
    public function images()
{
    return $this->hasMany(ProjectImage::class);
}
}
