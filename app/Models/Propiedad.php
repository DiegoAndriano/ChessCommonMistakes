<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function tipo_transaccion()
    {
        return $this->belongsTo(TipoTransaccion::class);
    }

    public function corredor()
    {
        return $this->belongsTo(Corredor::class);
    }


    public function tipo_propiedades()
    {
        return $this->belongsToMany(TipoPropiedad::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }
}
