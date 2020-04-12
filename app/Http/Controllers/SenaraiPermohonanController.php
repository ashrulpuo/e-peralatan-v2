<?php

namespace App\Http\Controllers;
use App\Permohonan;

use Illuminate\Http\Request;

class SenaraiPermohonanController extends Controller
{
    public function index()
    {
        $permohonan = Permohonan::whereNotIn('status_permohonan', [1,4])->with('peralatan')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.admin-senarai-permohonan', ['data' => $permohonan]);
    }
}
