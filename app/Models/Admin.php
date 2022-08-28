<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends  Authenticatable
{
    use HasFactory;
 
    protected $fillable = [
        'id',  'first_name' , 'last_name','image','phone','email' ,'password'
      ];
  
      public function filier(){
          return $this->belongsTo(Filier::class);
      }

}
