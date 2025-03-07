<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Photo extends Model
{
    protected $fillable = [
        'filename',
        'photoable_id',
        'photoable_type',
    ];

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'photoable');
    }

    public function tasks(): MorphToMany
    {
        return $this->morphedByMany(Task::class, 'photoable');
    }
}
