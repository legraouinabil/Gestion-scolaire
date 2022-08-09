<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',  'name' , 'description'
      ];
  
      public function filiers(){
          return $this->hasMany(Filier::class);
      }
}
