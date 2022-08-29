<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassSchedule extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'starting_time',
        'starting_time_timestamp',
        'ending_time',
        'ending_time_timestamp',
        'slug',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'class_schedules';

    protected $casts = [
        'starting_time_timestamp' => 'datetime',
        'ending_time_timestamp' => 'datetime',
    ];

    public function routine()
    {
        return $this->hasOne(Routine::class);
    }
}
