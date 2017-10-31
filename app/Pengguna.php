<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    public $timestamps = false;
    public $incrementing = false;  

    protected $primaryKey = 'penggunas_dev_id';
    protected $fillable = [
        'penggunas_nama',
        'penggunas_alamat',
        'penggunas_email',
        'penggunas_no_hp',
        'penggunas_state',
        'penggunas_lat',
        'penggunas_lang'
    ];  
}
