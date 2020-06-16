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
        $no = Permohonan::where('id_permohonan', $id)->get()->first();
        if(!empty($input['peralatan_satu'][0])) {
            $getPeralatan = PinjamPeralatan::where('id_permohonan', $id)->where('id_peralatan', (int)$input['peralatan_satu'][0])->get()->first();
            $getPeralatan->update(['id_peralatan' => (int)$input['peralatan_satu'][1]]);

            $oldperalatan = Peralatan::where('id', $input['peralatan_satu'][0])->get()->first();
            $oldperalatan->update(['status_peralatan' => 0]);

            $newperalatan = Peralatan::where('id', $input['peralatan_satu'][1])->get()->first();
            $newperalatan->update(['status_peralatan' => 1]);
        }
        return redirect()->route('home.show', $no->id);
    }

    //code status 1 = new permohonan, 2 = approve, 3 = reject
}
