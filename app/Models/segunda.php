<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class segunda extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'cpf',
        'ano',
        'nome',
        'preço',
    ];
}