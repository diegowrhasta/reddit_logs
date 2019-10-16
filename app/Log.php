<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'problema';

    protected $fillable = [
        'user', 'area', 'responsable', 'estado', 'equipo', 'descripcion', 'fecha_reporte', 'fecha_resolucion',
    ];
    
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
