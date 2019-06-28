<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelTim extends Model
{
    protected $table = 'tims';
    protected $primaryKey = 'id_tim';
    public $timestamps = false;
}
