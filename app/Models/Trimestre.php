<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{

    protected $table='trimestre';
    protected $primarykey='id';

    protected $fillable = [
        'id',
        'name',
        'fecha_inicial',
        'fecha_final'
    ];


public function TrimestresSucursalesTopicos()
{
    return $this->belongsToMany(Sucursal::class);
    return $this->belongsToMany(Topico::class);

}


}
