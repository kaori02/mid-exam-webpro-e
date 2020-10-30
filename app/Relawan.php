<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    protected $table = 'relawans';
    public $primaryKey = 'id_relawan';
    public $timestamps = true;
}
