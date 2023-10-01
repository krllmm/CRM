<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function scopeInProgress(Builder $query): void
    {
        $date = Carbon::now();
        $newdate = $date->addDays(7);
        $query->where('status', '=', 'In progress');
            //   ->whereBetween('deadline', [$date, $newdate]);
    }
}
