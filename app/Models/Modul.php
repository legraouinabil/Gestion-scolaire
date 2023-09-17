<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',  'name', 'description', 'nbHours', 'cofession', 'filier_id'
    ];

    public function filier()
    {
        return $this->belongsTo(Filier::class);
    }

    public function stagaires()
    {
        return $this->belongsToMany(Stagaire::class)->withPivot('note1' ,'note2' ,'efm' ,'notefinal'  );
    }
}
