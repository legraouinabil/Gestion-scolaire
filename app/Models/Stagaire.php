<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',  'first_name' , 'last_name','image','phone','email' ,'password', 'filier_id'
      ];
  
      public function filier(){
          return $this->belongsTo(Filier::class);
      }

}
