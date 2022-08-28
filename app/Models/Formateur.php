<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Formateur extends Authenticatable
{
    
    use HasFactory;
    protected $fillable = [
        'id',  'first_name' , 'last_name','image','phone','email' ,'password', 'filier_id'
      ];
  
      public function filier(){
          return $this->belongsTo(Filier::class);
      }

    
}
