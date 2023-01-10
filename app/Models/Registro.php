<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'sucursal_id',
        'trimestre_id',
        'topico_id',
        'nombre_socio',
        'num_socio',
        'ref_credito',
        'fecha_colocacion',
        'monto',
        'plazo_evidencia',
        'finalidad',
        'factura',
        'endoso_a_favor_cooperativa',
        'garantia_cubre_credito',
        'poliza',
        'seguro',
        'observaciones',
        'cumplimiento',
        'nivel_riesgo',
        'estatus',
        'puntaje_nivel_riesgo'
    ];
}
