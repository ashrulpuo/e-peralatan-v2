<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{
    public function index()
    {
        $id = \Auth::user()->id;
        $admins = User::all();
        return view('staff.index', ['admins' => $admins, 'id' => $id]);
    }

    public function create()
    {
        return view('staff.daftar-admin');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['bahagian'] = 'BICT';
        $input['password'] = bcrypt('admin123'); //change password
        DB::beginTransaction();
        try {
            if (User::create($input)) {
                DB::commit();
                return redirect()->route('daftar.index')->with('success', "succcess add new admin");
            }
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function edit($id)
    {
        $admin = User::where('id', $id)->first();
        return view('staff.edit', ['admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $admin = User::where('id', $id)->first();
        $input = $request->all();
        
        DB::beginTransaction();
        try {
            if ($admin->update($input)) {
                DB::commit();
                return redirect()->route('daftar.index')->with('success', "succcess add new admin");
            }
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['success'=>'berjaya padam']);
    }
}
