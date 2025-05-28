<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //
    use HasFactory;
    protected $table = 'leads';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','first_name','last_name','email','mobile','city','institute','pincode','utm_source','utm_campaign','crm_status','whatsapp_status','mail_status','message_status','created_at',
    ];
}
