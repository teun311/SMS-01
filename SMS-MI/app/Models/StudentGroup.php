<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentGroup extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['group_name', 'note', 'slug', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'student_groups';

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function examQuestions()
    {
        return $this->hasMany(ExamQuestion::class);
    }
}
