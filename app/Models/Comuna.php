<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'direction',
        'phone',
        'lgn',
        'lat'
    ];


    public function tramite()
    {
        return $this->hasOne(Tramite::class);
    }
    public function rubros()
    {
        return $this->belongsToMany(Rubro::class,'documento_relacions')->withPivot('documento_id')->withTimestamps();
    }




}
