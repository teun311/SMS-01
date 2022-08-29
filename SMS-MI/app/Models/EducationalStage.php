<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducationalStage extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['group_name', 'slug', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'educational_stages';

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function academicClasses()
    {
        return $this->hasMany(AcademicClass::class);
    }
}
