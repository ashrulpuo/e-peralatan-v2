<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
   
    public function store(Request $request)
    {
        $input = $request->all();
        $input['id_peralatan'] = [
            'id_peralatan1' => $input['id_peralatan1'],
            'id_peralatan2' => $input['id_peralatan2'],
            'id_peralatan3' => $input['id_peralatan3']
        ];

        $input['tarikh_pinjam'] = date('Y-m-d', strtotime($input['tarikh_pinjam']));
        $input['tarikh_pulang'] = date('Y-m-d', strtotime($input['tarikh_pulang']));
       
        $ref_num = rand(1000,9999); 
        $input['id_permohonan'] = 'P'.$ref_num;

        foreach ($input['id_peralatan'] as $key => $value) {
            $input['id_peralatan'] = $value;
            $input['status_permohonan'] = 1;
            if(!empty($input['id_peralatan'])) {
                $num = Permohonan::create($input);
            }
        }

        $running_num = $num->id_permohonan;
        return redirect()->route('login', ['ref_num' => $running_num]);
        // return view('index', ['data' => $running_num]);
    }

    public function search(Request $request)
    {
        $id = $request->all();
        $permohonan = Permohonan::where('id_permohonan', $id['id_pemohonan'])->first();
        $status = $permohonan['status_permohonan'];
        return view('semakan', ['status' => $status]);
    }


}
