<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','course_erp_code','title','slug','course_video_title','course_video_link','course_video_image','banner_image','featured_image','description','excerpt','duration','no_of_module','highlights','number_of_enrolled','number_of_rating','tags','enable_otp','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];

    public function category()
    {
        return $this->belongsTo(CourseType::class,'id');
    }
}
