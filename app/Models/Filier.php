<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',  'name' , 'description','image','dureé','formation_id'
      ];
  
      public function formation(){
          return $this->belongsTo(Formation::class);
      }

      public function formateurs(){
        return $this->hasMany(Formateur::class);
    }

    public function stagaires(){
        return $this->hasMany(Stagaire::class);
    }


    public function modules(){
        return $this->hasMany(Modul::class);
    }
}
