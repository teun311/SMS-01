<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'section_name',
        'capacity',
        'slug',
        'note',
        'status',
    ];

    protected $searchableFields = ['*'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function routines()
    {
        return $this->hasMany(Routine::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function examSchedules()
    {
        return $this->hasMany(ExamSchedule::class);
    }

    public function examAttendances()
    {
        return $this->hasMany(ExamAttendance::class);
    }

    public function examMarks()
    {
        return $this->hasMany(ExamMark::class);
    }

    public function examQuestions()
    {
        return $this->hasMany(ExamQuestion::class);
    }

    public function studentFeePayments()
    {
        return $this->hasMany(StudentFeePayment::class);
    }
}
