<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','question','answer','status','created_at'
    ];
}