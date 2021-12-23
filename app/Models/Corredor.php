<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function franquicia()
    {
        return $this->belongsTo(Franquicia::class);
    }

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}
