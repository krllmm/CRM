<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function scopeInProgress(Builder $query): void
    {
        $query->where('status', 'In progress');
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function client(): BelongsTo
    {
        return $this->BelongsTo(Client::class);
    }

}
