<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
