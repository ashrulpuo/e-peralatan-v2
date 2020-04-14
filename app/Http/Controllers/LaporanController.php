<?php

namespace App\Http\Controllers;

use App\Permohonan;
use App\Peralatan;
use App\PinjamPeralatan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $pemohon = Permohonan::where('status_permohonan', 4)->with('peralatan.detailPeralatan')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.laporan', ['pemohon' => $pemohon]);
    }

    public function show($id)
    {
        $pemohon = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first()->toArray();
        // dd($pemohon);
        return view('admin.cetak-laporan', ['data' => $pemohon]);
    }
}
