<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'student_number', 'major'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
