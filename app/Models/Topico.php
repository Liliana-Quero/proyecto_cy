<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = 'topicos';
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'name'
    ];


    public function TopicosSucursalesTrimestres()
    {
        return $this->belongsToMany(Sucursal::class);
        return $this->belongsToMany(Trimestre::class);
    }
}
