<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permohonan;
use App\Peralatan;
use App\PinjamPeralatan;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $permohonan = Permohonan::where('status_permohonan', 1)->with('peralatan.detailPeralatan')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.home', ['data' => $permohonan]);
    }

    public function show($id)
    {
        $namaPengeluar = \Auth::user()->name;
        $permohonan = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first()->toArray();
        return view('admin.proses-permohonan', ['data' => $permohonan, 'namaPengeluar' => $namaPengeluar]);
    }

    public function approve(Request $request,$id)
    {
        $input = $request->all();
        $pemohon = Permohonan::find($id);
        $pemohon->update(['status_permohonan' => 2, 'nama_pengeluar' => $input['nama_pengeluar']]);
        return redirect()->route('home.index');
    }

    public function reject($id)
    {
        $pemohon = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first();
        foreach($pemohon['peralatan'] as $key => $peralatan) {
            $peralatanId = Peralatan::where('id', $peralatan['id_peralatan'])->first();
            $peralatanId->update(['status_peralatan' => 0]);
        }
        $pemohon->update(['status_permohonan' => 3]);
        return redirect()->route('home.index');
    }

    public function change($id)
    {
        $pemohonItems = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->get()->pluck('peralatan')->toArray();
        $id = Permohonan::select('id', 'id_permohonan')->where('id', $id)->first()->toArray();
        $peralatan = Peralatan::where('status_peralatan', 0)->get();
        // dd($pemohonItems);
        return view('admin.tukar-peralatan', ['pemohonItems' => $pemohonItems,'id' => $id, 'peralatan' => $peralatan]);
    }

    public function details()
    {
        return view('admin.tukar-peralatan');
    }

    public function changeProcess(Request $request, $id)
    {
        $input = $request->all();
        // dd($input);
        $no = Permohonan::where('id_permohonan', $id)->get()->first();
        if(!empty($input['peralatan_satu'][0])) {
            $getPeralatanSatu = PinjamPeralatan::where('id_permohonan', $id)->where('id_peralatan', (int)$input['peralatan_satu'][0])->get()->first();
            $getPeralatanSatu->update(['id_peralatan' => (int)$input['peralatan_satu'][1]]);

            $oldperalatanSatu = Peralatan::where('id', $input['peralatan_satu'][0])->get()->first();
            $oldperalatanSatu->update(['status_peralatan' => 0]);

            $newperalatanSatu = Peralatan::where('id', $input['peralatan_satu'][1])->get()->first();
            $newperalatanSatu->update(['status_peralatan' => 1]);
        }
        if(!empty($input['peralatan_dua'][0])) {
            $getPeralatanDua = PinjamPeralatan::where('id_permohonan', $id)->where('id_peralatan', (int)$input['peralatan_dua'][0])->get()->first();
            // dd($getPeralatan);
            $getPeralatanDua->update(['id_peralatan' => (int)$input['peralatan_dua'][1]]);

            $oldperalatanDua = Peralatan::where('id', $input['peralatan_dua'][0])->get()->first();
            $oldperalatanDua->update(['status_peralatan' => 0]);

            $newperalatanDua = Peralatan::where('id', $input['peralatan_dua'][1])->get()->first();
            $newperalatanDua->update(['status_peralatan' => 1]);
        }
        if(!empty($input['peralatan_tiga'][0])) {
            $getPeralatanTiga = PinjamPeralatan::where('id_permohonan', $id)->where('id_peralatan', (int)$input['peralatan_tiga'][0])->get()->first();
            $getPeralatanTiga->update(['id_peralatan' => (int)$input['peralatan_tiga'][1]]);

            $oldperalatanTiga = Peralatan::where('id', $input['peralatan_tiga'][0])->get()->first();
            $oldperalatanTiga->update(['status_peralatan' => 0]);

            $newperalatanTiga = Peralatan::where('id', $input['peralatan_tiga'][1])->get()->first();
            $newperalatanTiga->update(['status_peralatan' => 1]);
        }
        return redirect()->route('home.show', $no->id);
    }

    //code status 1 = new permohonan, 2 = approve, 3 = reject
}
