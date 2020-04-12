<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permohonan;
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
        $permohonan = Permohonan::with('peralatan')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.home', ['data' => $permohonan]);
    }

    public function show($id)
    {
        $permohonan = Permohonan::where('id',$id)->with('peralatan')->first()->toArray();
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
        $pemohon = Permohonan::find($id);
        $pemohon->update(['status_permohonan' => 3]);
        return redirect()->route('home.index');
    }

    public function change($id)
    {
        dd($id);
    }

    //code status 1 = new permohonan, 2 = approve, 3 = reject
}
