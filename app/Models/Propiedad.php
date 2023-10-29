<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Colonia;

class Propiedad extends Model
{
    use HasFactory;
    protected $fillable=['titulo','descripcion','precio','imagen','fechaPub','edoPropiedad','tipoPropiedad','habitaciones','colonia_id'];

    public function colonias(): BelongsTo{
        return $this->belongsTo(Colonia::class,);
    }
}
