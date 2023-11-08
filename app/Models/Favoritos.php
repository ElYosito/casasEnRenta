<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favoritos extends Model
{
    use HasFactory;
    protected $fillable = ['propiedads_id', 'user_id'];

    public function propiedads(): BelongsTo{
        return $this->belongsTo(Propiedad::class);
    }
}
