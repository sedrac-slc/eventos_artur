<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialTipoEvento extends Model
{
    use HasFactory, HasUuids;

    protected $table = "material_tipo_evento";

    protected $fillable = [
        'id','tipo_evento_id', 'material_id', 'preco'
    ];

    public function tipo_evento(){
        return $this->belongsTo(TipoEvento::class,'tipo_evento_id','id');
    }

    public function material(){
        return $this->belongsTo(Material::class,'material_id','id');
    }

}
