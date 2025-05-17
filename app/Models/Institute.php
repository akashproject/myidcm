<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    protected $table = 'institutes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','title','slug','banner_image','featured_image','excerpt','description','highlights','email','mobile','whatsapp','address','gmap_location','review_widget','courses','state_id','city_id','district','pincode','center_pincode','lat','lng','faqs','enable_otp','meta_description','schema','robots','utm_campaign','utm_source','status','created_at',
    ];
}
