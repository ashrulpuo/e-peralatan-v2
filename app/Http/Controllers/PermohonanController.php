<?php

namespace App\Http\Controllers;

use App\Permohonan;
use App\PinjamPeralatan;
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


}
