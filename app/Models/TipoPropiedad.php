<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPropiedad extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function propiedad()
    {
        return $this->belongsToMany(Propiedad::class);
    }
}
