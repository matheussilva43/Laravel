<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = 'pessoas';
    protected $primaryKey = "idpessoas";
    public $timestamps = false;
}
