<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\User;

class SocialProfile extends Model
{
    protected $fillable = ['user_id','social_id','social_name','social_avatar'];
    use HasFactory;
    //Relacion uno a muchos inversa
    public function user(){
        $this->belongsTo(User::class);
    }
}
