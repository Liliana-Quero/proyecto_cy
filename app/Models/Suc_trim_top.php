<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suc_trim_top extends Model
{
 
    protected $table='suc_trim_top';
    protected $primarykey='id';

    protected $fillable = [
        'id',
        'sucursal_id',
        'trimestre_id',
        'topicos_id',


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
