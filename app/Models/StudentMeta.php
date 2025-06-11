<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMeta extends Model
{
    //
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','student_id','key','value','created_at'
    ];
}
