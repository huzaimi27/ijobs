<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\perusahaan;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class lamaranController extends Controller
{
    public function index(){
        $model_perusahaan = perusahaan::select('*')
            ->get();
        $model_akun = DB::table('perusahaan')->get();

        return view('admin.lamaran.view', compact('model_perusahaan', 'model_akun'));
    }
}
