<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    protected $table='registros';
    protected $primarykey='id';

    protected $fillable = [
        'id',
        'id_suc_trim_top',
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
    public function registros(){
        return $this->belongsTo('App\Registros');
    }

public function sucursalesTopicosTrimestres()
{
    return $this->belongsToMany(Trimestre::class);
    return $this->belongsToMany(Topico::class);

}
}
