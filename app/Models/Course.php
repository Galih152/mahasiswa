<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_code', 'course_name', 'credits'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}

