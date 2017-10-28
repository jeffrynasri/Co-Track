<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'penggunas_dev_id';
    public $incrementing = false;    
}
