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
    	'status_permohonan',
        'id_permohonan',
        'nama_pemulang',
        'jawatan_pemulang'
    ];

    public function peralatan(){
        return $this->hasMany(PinjamPeralatan::class, 'id_permohonan', 'id_permohonan');
    }
}