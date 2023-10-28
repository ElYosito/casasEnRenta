<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Propiedad;

class Colonia extends Model
{
    use HasFactory;
    protected $fillable =['nombreColonia','asentamiento','cp','zona'];

    public function propiedades(): HasMany{
        return $this->hasMany(Propiedad::class);
    }
}
