<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoRelacion extends Model
{
    use HasFactory;

    public function rubro(){
        return $this->belongsTo(Rubro::class,'rubro_id');
    }
    public function comuna(){
        return $this->belongsTo(Comuna::class,'comuna_id');
    }
    public function documento(){
        return $this->belongsTo(Documento::class,'documento_id');
    }

    public static function getRequisitos($rubro_id,$comuna_id){
        return DocumentoRelacion::where('rubro_id',$rubro_id)
            ->where('comuna_id',$comuna_id)
            ->with('rubro')
            ->with('comuna')
            ->with('documento')
            ->get();
    }
}
