<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
  
    protected $table = 'hoteis';

    // Campos no banco: id, nome, cidade, país, estrelas, valor da diária e comodidades. 
    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'pais',
        'estrelas',
        'valorDiaria',
        'comodidades',
    ];
}
