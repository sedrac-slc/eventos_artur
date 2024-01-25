<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id', 'tipo_evento_id', 'nome', 'data_comeco', 'data_termino'
    ];

    public function tipo_evento(){
        return $this->hasOne(TipoEvento::class);
    }

}
