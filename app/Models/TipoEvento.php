<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id','nome','preco'
    ];

    public function eventos(){
        return $this->hasMany(Evento::class);
    }

}
