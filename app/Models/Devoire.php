<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',  'description' , 'group_id','image','file','formateur_id' ,'last_time'
      ];

    public function stagaires(){
        return $this->belongsToMany(Stagaire::class)->withPivot(['file_reponse' , 'note'])
        ->withTimestamps();;

    }
}
