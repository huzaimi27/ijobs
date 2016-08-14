<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;  
use App\toko;
use App\produk;
use App\provinsi;
use App\Kota;
use App\Kecamatan;
use App\Kelurahan;
use App\Helper;
use Input;  
use Flash;
use DB;

class TokoController extends Controller
{
    public function index()
    {
        $model = toko::select( 'id_toko','nama_toko','no_telp_toko','alamat_toko','provinsi','kota','kecamatan','email','created_at')->orderBy('id_toko','desc')->get();

        return View('admin.toko.index', compact('model')); 
    } 

    public function create()
    {   
        // $a = kelurahan::select('*')->where('kelurahan_id','=','2147483647')->limit(10); 
        return View('admin.toko.create'); 
    }

    public function store()
    {
        $model = Input::all(); 
        if ($model['password'] != $model['password2']) { 
            return Redirect::back();
        }
        $model['no_telp_toko'] = Helper::getAngka($model['no_telp_toko']); 
        $model['fax']          = Helper::getAngka($model['fax']);         
        $model['tgl_lahir']    = Helper::tgl_db($model['tgl_lahir']);
        $model['no_telp1']     = Helper::getAngka($model['no_telp1']); 
        $model['no_telp2']     = Helper::getAngka($model['no_telp2']);
        $model['password']     = bcrypt($model['password']);

        $model['provinsi_toko']     = substr($model['provinsi_toko'],2);
        $model['kota_toko']         = substr($model['kota_toko'],4);
        $model['kecamatan_toko']    = substr($model['kecamatan_toko'],7); 
        $model['provinsi']     = substr($model['provinsi'],2);
        $model['kota']         = substr($model['kota'],4);
        $model['kecamatan']    = substr($model['kecamatan'],7); 

        if (!empty(Input::get('dokumen'))) {  
          $model['dokumen'] = implode(", ", Input::get('dokumen')); 
        }  

        if (toko::create($model)) {  
            Flash::success('Save Success');
            return redirect('admin/toko/');
        } else {  
            return redirect('admin/toko/');
        } 
    }

    public function viewToko($id)
    { 
        // $model = toko::join('produk', 'toko.id_toko', '=', 'produk.id_toko') 
            // ->select('toko.*', 'produk.*')->where('produk.id_toko','=',$id)
            // ->get();
        $toko = toko::find($id);
        $produk = Produk::select('*')->where('id_toko','=',$id)->get(); 
        if (is_null($toko)){ 
            return redirect('admin/toko/');
        }else{ 
            return View('admin.toko.view', compact('toko','produk'));
        }
    }

    public function edit($id)
    {
        $model = toko::find($id); 
        $doc_arr = explode(', ', $model->dokumen);
        for ($i=1; $i <=4 ; $i++) { 
            if(in_array($i,$doc_arr) === true){
                $doc[$i] = $i;
            }else{
                $doc[$i] = "-";
            } 
        } 
        if (is_null($model))
        {
            return Redirect::route('admin.toko.index');
        }
        return view('admin.toko.edit', compact('model','doc'));
    }

    public function update()
    {

        $input = Input::all();
        $model = toko::find($input['id_toko']);
        if ($input['password'] != $input['password2']) { 
            return Redirect::back();
        }

        $input['no_telp_toko'] = Helper::getAngka($input['no_telp_toko']); 
        $input['fax']          = Helper::getAngka($input['fax']);         
        $input['tgl_lahir']    = Helper::tgl_db($input['tgl_lahir']);
        $input['no_telp1']     = Helper::getAngka($input['no_telp1']); 
        $input['no_telp2']     = Helper::getAngka($input['no_telp2']);
        $input['password']     = bcrypt($input['password']);

        $input['provinsi_toko']     = substr($input['provinsi_toko'],2);
        $input['kota_toko']         = substr($input['kota_toko'],4);
        $input['kecamatan_toko']    = substr($input['kecamatan_toko'],7); 
        $input['provinsi']     = substr($input['provinsi'],2);
        $input['kota']         = substr($input['kota'],4);
        $input['kecamatan']    = substr($input['kecamatan'],7); 
        if (!empty(Input::get('dokumen'))) {  
          $input['dokumen'] = implode(", ", Input::get('dokumen')); 
        }
        
        if ($model->update($input)) { 
            return redirect('admin/toko'); 
        } else {  
            return redirect('admin/toko');
        } 
    }

    public function destroy($id)
    {
        $model = toko::find($id); 
        if ($model->delete()) {
            Flash::success('Delete Success');
            return redirect('admin/toko'); 
        }
        return redirect('admin/toko'); 
    }

    public function getKotax(Request $request, $id) {
        if ($request->ajax()) {
            $dataKota = Kota::kotax($id);
            return response()->json($dataKota);
        }
    }

    public function getKecamatanx(Request $request, $id) {
            $id= substr($id,0,4);
        if ($request->ajax()) {
            $dataKecamatan = Kecamatan::kecamatanx($id);
            return response()->json($dataKecamatan);
        }
    }

    public function getKelurahanx(Request $request, $id) {
            $id= substr($id,0,7);
            // var_dump($id);
        if ($request->ajax()) {
            $dataKelurahan = Kelurahan::kelurahanx($id);
            return response()->json($dataKelurahan);
        }
    }

}
