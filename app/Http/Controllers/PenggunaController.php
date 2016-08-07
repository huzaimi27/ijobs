<?php

namespace App\Http\Controllers;

use App\pengguna;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests;
use DB;

class PenggunaController extends Controller
{
    public function index(){
        return view('pengguna.register');
    }
    public function register(Request $request) {
        $post = $request->input();
        DB::table('pengguna')->insert([
            'email' => $post['email'],
            'password' => bcrypt($post['password'])
        ]);
        return view('home');
    }
}
