<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Colonia;

class Propiedad extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'fechaPub',
        'habitaciones',
        'tipoCasa',
        'tipoA',
        'tipoPropiedad',
        'ubicacion',
        'servicios',
        'precio',
        'edoPropiedad'
    ];

    public function colonias(): BelongsTo
    {
        return $this->belongsTo(Colonia::class,);
    }
}
