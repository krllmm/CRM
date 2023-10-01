<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Builder;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function scopeRecent(Builder $query): void
    {
        //the recent client was added less than 14 days before current date
        $date = Carbon::now();
        $date->subDays(14);
        $query->whereDate('created_at', '>', $date);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
