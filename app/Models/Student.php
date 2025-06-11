<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
    //
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','email','mobile','created_at'
    ];
}
