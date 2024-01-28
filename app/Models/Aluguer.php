<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id','evento_id','material_id', 'quantidade'
    ];

    public function evento(){
        return $this->belongsTo(Evento::class,'evento_id','id');
    }

    public function material(){
        return $this->belongsTo(Material::class,'material_id','id');
    }

}
