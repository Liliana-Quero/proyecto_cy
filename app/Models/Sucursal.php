<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class Sucursal extends Model
{
    protected $table='sucursales';
    protected $primarykey='id';

    protected $fillable = [
        'id',
        'name'
    ];
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }

public function sucursalesTopicosTrimestres()
{
    return $this->belongsToMany(Trimestre::class);
    return $this->belongsToMany(Topico::class);

}
}
