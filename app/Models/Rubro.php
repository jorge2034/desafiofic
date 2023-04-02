<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function tramite()
    {
        return $this->hasOne(Tramite::class);
    }

    public function comunas()
    {
        return $this->belongsToMany(Comuna::class,'documento_relacions')->withPivot('documento_id')->withTimestamps();
    }
}
