<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamPeralatan extends Model
{
    protected $table = 'pinjam_peralatan';
    protected $fillable = [
    	'id_permohonan',
    	'tarikh_pinjam',
    	'tarikh_pulang',
    	'id_peralatan'
    ];

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'id_permohonan', 'id_permohonan');
    }

    public function detailPeralatan()
    {
        return $this->hasOne(Peralatan::class, 'id', 'id_peralatan');
    }
}
