<?php

namespace App\Http\Controllers;

use App\Permohonan;
use App\PinjamPeralatan;
use App\Peralatan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{

    public function store(Request $request)
    {
        $input = $request->all();
        $pinjam['id_peralatan'] = [
            'id_peralatan1' => $input['id_peralatan1'],
            'id_peralatan2' => $input['id_peralatan2'],
            'id_peralatan3' => $input['id_peralatan3']
        ];
        $input['status_permohonan'] = 1;
        $ref_num = rand(1000,9999);            
        $input['id_permohonan'] = 'P'.$ref_num;
        $input['nama_pemulang'] = 0;
        //save to table permohonan
        $num = Permohonan::create($input);
        
        $pinjam['tarikh_pinjam'] = date('Y-m-d', strtotime(strtr($input['tarikh_pinjam'], '/', '-')));
        $pinjam['tarikh_pulang'] = date('Y-m-d', strtotime(strtr($input['tarikh_pulang'], '/', '-')));
        $running_num = $num->id_permohonan;
        $pinjam['id_permohonan'] = $running_num;
        foreach ($pinjam['id_peralatan'] as $key => $value) {
            $pinjam['id_peralatan'] = $value;
            if(!empty($pinjam['id_peralatan'])) {
                PinjamPeralatan::create($pinjam);
            }
            $item = Peralatan::find($pinjam['id_peralatan']);
            if (!empty($item)) {
                $item->update(['status_peralatan' => 1]);
            }
        }

        return redirect()->route('login', ['ref_num' => $running_num]);
    }

    public function search(Request $request)
    {
        $id = $request->all();
        $permohonan = Permohonan::where('id_permohonan', $id['id_pemohonan'])->first();
        $status = $permohonan['status_permohonan'];

        if(empty($permohonan)) {
            $status = 3;
        }
        return redirect()->route('semakan', ['status' => $status]);
    }

    public function permohonan()
    {
        $peralatan = Peralatan::where('status_peralatan', 0)->get();
        return view('permohonan', ['peralatan' => $peralatan]);
    }

    public function changeItem($id)
    {
        $peralatan = Peralatan::whereNotIn('id', [$id])->where('status_peralatan', 0)->get();
        return json_encode($peralatan);
    }

    public function changeItemThird($id,$id2)
    {
        $peralatan = Peralatan::whereNotIn('id', [$id, $id2])->where('status_peralatan', 0)->get();
        return json_encode($peralatan);
    }

}
