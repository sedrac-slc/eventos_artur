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

}
