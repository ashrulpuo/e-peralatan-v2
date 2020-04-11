<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'pemohonan';
    protected $fillable = [
    	'nama',
    	'jawatan',
    	'bahagian',
    	'tujuan',
    	'tempat_digunakan',
    	'tarikh_pinjam',
    	'tarikh_pulang',
    	'id_peralatan',
    	'status_permohonan',
        'id_permohonan'
    ];
}