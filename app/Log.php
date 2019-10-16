<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'problema_id';

    protected $fillable = [
        'problema','user', 'area', 'responsable', 'estado', 'equipo', 'descripcion', 'fecha_reporte', 'fecha_resolucion', 'organization'
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
