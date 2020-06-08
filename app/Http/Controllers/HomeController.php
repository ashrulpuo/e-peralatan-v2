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
        $permohonan = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first()->toArray();
        return view('admin.proses-permohonan', ['data' => $permohonan]);
    }

    public function approve($id)
    {
        $pemohon = Permohonan::find($id);
        $pemohon->update(['status_permohonan' => 2]);
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
        // dd($id);
        return view('admin.tukar-peralatan', ['pemohonItems' => $pemohonItems,'id' => $id, 'peralatan' => $peralatan]);
    }

    public function details()
    {
        return view('admin.tukar-peralatan');
    }

    public function changeProcess(Request $request, $id)
    {
        // dd($request->all());
        $data = [];
        $data['peralatan1'] = $request->input('peralatan1');
        $data['peralatan2'] = $request->input('peralatan2');
        $data['peralatan3'] = $request->input('peralatan3');

        $changeItems = array_filter($data);
        dd($changeItems);
        $peralatanPemohon = PinjamPeralatan::where('id_permohonan', $id)->get()->toArray();
        dd($peralatanPemohon);
        foreach($peralatanPemohon as $key => $peralatan)
        {

        }
    }

    //code status 1 = new permohonan, 2 = approve, 3 = reject
}
