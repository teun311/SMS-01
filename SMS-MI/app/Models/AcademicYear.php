<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AcademicYear extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'session_year_start',
        'session_year_end',
        'session_month_start',
        'session_month_end',
        'slug',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'academic_years';

    public function routines()
    {
        return $this->hasMany(Routine::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function examSchedules()
    {
        return $this->hasMany(ExamSchedule::class);
    }

    public function syllabi()
    {
        return $this->hasMany(Syllabus::class);
    }

    public function examQuestions()
    {
        return $this->hasMany(ExamQuestion::class);
    }

    public function currentClassPromotions()
    {
        return $this->hasMany(
            ClassPromotion::class,
            'current_academic_year_id'
        );
    }

    public function promotedClassPromotions()
    {
        return $this->hasMany(
            ClassPromotion::class,
            'promoted_academic_year_id'
        );
    }

    public function studentFeePayments()
    {
        return $this->hasMany(StudentFeePayment::class);
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
}
