<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id', 'nome', 'data_comeco', 'data_termino'
    ];

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

}
