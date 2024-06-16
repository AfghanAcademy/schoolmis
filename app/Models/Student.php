<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'section_id', 'class_id', 'email'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
}
