<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soporte extends Model
{
    protected $fillable =[
    'Nombre_Usuario','Anexo','Motivo_Soporte','Fecha_Solicitud','Usuario_soporte','Estado','Informacion_Adicional'
    ];
}
