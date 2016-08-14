<?php

namespace App\Http\Controllers\admin;

use App\perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\toko;
use App\produk;
use App\Merek;
use App\Kategori;
use App\Jenisproduk;
use Input;

class perusahaanController extends Controller
{
    public function index()
    {
        $model_perusahaan = perusahaan::select('*')
            ->get();
        $model_akun = DB::table('perusahaan')->get();


        return view('admin.perusahaan.view', compact('model_perusahaan', 'model_akun'));
    }

    public function create()
    {
        return view('admin.perusahaan.create');
    }

    public function store(Request $request)
    {
        $post = $request->input();
        $id = DB::table('perusahaan')->insertGetId([
            'nama_perusahaan' => $post['nama_perusahaan'],
            'email_perusahaan' => $post['email'],
            'password' => bcrypt($post['password']),
        ]);

        DB::table('profil_perusahaan')->insert([
           'alamat' => $post['alamat'],
            'id_perusahaan' => $id,
           'website' => $post['website'],
           'j_badanusaha' => $post['j_badanusaha'],
           'telepon' => $post['telepon'],
           'fax' => $post['fax'],
//           'logo' => $post['logo'],
           'keterangan' => $post['keterangan'],
        ]);

            return redirect('admin/perusahaan/create');
    }

    public function edit($id)
    {
        // return view('admin.produk.edit');
        $model = DB::table('profil_perusahaan')->where('id_profilperusahaan', '=', $id)->first();
        $model_akun = DB::table('perusahaan')
            ->where('id_perusahaan', '=', $model->id_perusahaan)
            ->first();

        return view('admin.perusahaan.edit', compact('model', 'model_akun'));
    }

    public function update(Request $request){
        $post = $request->input();
        $id_perusahaan = $post['id_perusahaan'];
        $id_akun = $post['id_akun'];

        DB::table('perusahaan')
            ->where('id_perusahaan', $id_akun)
            ->update([
                'nama_perusahaan' => $post['nama_perusahaan'],
                'email_perusahaan' => $post['email'],
                'password' => bcrypt($post['password']),
            ]);

        DB::table('profil_perusahaan')
            ->where('id_profilperusahaan', $id_perusahaan)
            ->update([
                'alamat' => $post['alamat'],
                'id_perusahaan' => $id_akun,
                'website' => $post['website'],
                'j_badanusaha' => $post['j_badanusaha'],
                'telepon' => $post['telepon'],
                'fax' => $post['fax'],
                'keterangan' => $post['keterangan'],
            ]);
        return redirect('admin/perusahaan/view');
    }
}
