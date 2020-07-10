<?php

namespace App\Http\Controllers;

use App\Permohonan;
use App\Peralatan;
use App\PinjamPeralatan;
use Illuminate\Http\Request;
use App\User;

class LaporanController extends Controller
{
    public function index()
    {
        $pemohon = Permohonan::where('status_permohonan', 4)->with('peralatan.detailPeralatan')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.laporan', ['pemohon' => $pemohon]);
    }

    public function show($id)
    {
        $person = User::where('jawatan', 'Pegawai Teknologi Maklumat')->first();
        $pemohon = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first()->toArray();
        // dd($pemohon);
        return view('admin.cetak-laporan', ['data' => $pemohon, 'person' => $person]);
    }
}
