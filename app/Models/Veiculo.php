<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    Protected $fillable = [
        'id',
        'marca_id',
        'modelo',
        'ano',
        'preco',
        'status',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
