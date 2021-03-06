<?php

namespace App\Http\Controllers;

use App\Peralatan;
use App\Permohonan;
use App\User;
use Illuminate\Http\Request;

class PulangController extends Controller
{
    public function show($id)
    {
        $admin = \Auth::user();
        $pemohon = Permohonan::where('id',$id)->with('peralatan.detailPeralatan')->first()->toArray();
        return view('admin.pulang-peralatan', ['data' => $pemohon, 'admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        // dd($input);
        $input['status_permohonan'] = 4;
        $input['updated_at'] = date('Y-m-d H:i:s');
        $pemohon = Permohonan::find($id);

        $pemohon->update($input);
        foreach($input['peralatan'] as $data){
            $pinjam = Peralatan::where('id', $data);
            $pinjam->update(['status_peralatan' => 0]);
        }
        return redirect()->route('laporan.index');
    }
}
