<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_empleados extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tb_empleados";

    public function sueldos(){

        return $this->hasOne('App\Models\tb_sueldos', 'id', 'id');

    }

}

