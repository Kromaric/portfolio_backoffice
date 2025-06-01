<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon', // optionnel, pour une icône ou image
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_technology');
    }
}
