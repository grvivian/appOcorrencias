<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Ocorrencia extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'foto'];

    public function getFotoAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
