<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $guarded = [];

    public function projects(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
