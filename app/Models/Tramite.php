<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    protected $fillable = [
        'rubro_id',
        'comuna_id',
        'current_step',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function rubro(){
        return $this->belongsTo(Rubro::class,'rubro_id');
    }
    public function comuna(){
        return $this->belongsTo(Comuna::class,'comuna_id');
    }
}
