<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'id');
    }
}
