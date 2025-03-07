<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function photos(): MorphToMany
    {
        return $this->morphToMany(Photo::class, 'photoable');
    }
}
