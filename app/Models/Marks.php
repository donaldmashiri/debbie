<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'mark_name'];

//    protected $fillable = [
//        'student_id',
//        'semester_id',
//        'mark',
//        'percentage',
//        'symbol',
//    ];

}
