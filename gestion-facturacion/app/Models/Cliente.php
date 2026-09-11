<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'razon_social',
        'nombre_contacto',
        'email',
        'telefono',
        'direccion',
    ];

    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class);
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
