<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';
    protected $primarykey='id';
    public $timestamps=false;

    protected $fillable =[
        'id',
        'name',
        'email',
        'role',
        'username',
        'password'    ];

        protected $guarded =[

        ];
}
