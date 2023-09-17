<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Stagaire extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id',  'first_name', 'last_name', 'image', 'phone', 'email', 'password', 'filier_id', 'group_id'
    ];

    public function filier()
    {
        return $this->belongsTo(Filier::class);
    }

    public function devoires()
    {
        return $this->belongsToMany(Devoire::class)->withPivot('status');
    }

    public function moduls()
    {
        return $this->belongsToMany(Modul::class)->withPivot('note1', 'note2', 'efm', 'notefinal');
    }
}
