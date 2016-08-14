<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller; 
use App\Http\Requests;
use App\toko;
use App\produk;
use App\Merek;
use App\Kategori;
use App\Jenisproduk;
use Input;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.produk');
    } 

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store()
    {
        $file = array('file' => Input::file('foto_produk')); 
        $rules = array('file' => 'mimes:jpeg,png|max:10240');
        $validator = Validator::make($file, $rules); 
        
        if ($validator->fails() or  Input::file('foto_produk') ==NUll) {  
            $fileName = "";
        } else {  
            $name = Input::file('foto_produk')->getClientOriginalName();
            $fileName = "Produk-".rand(1,9999).$name;
            Input::file('foto_produk')->move($this->path(), $fileName);
        }

        $model = Input::all();
        // var_dump($model);
        // exit;
        if (!empty(Input::get('size_produk'))) {  
          $model['size_produk'] = implode(", ", Input::get('size_produk')); 
        }     
        $model['foto_produk']  = $fileName;  
        $model['deskripsi_produk'] =  strip_tags($model['deskripsi_produk']); 
        
        if (produk::create($model)) {  
            return redirect('admin/produk/create'); 
        } else {  
            return redirect('admin/produk/create');
        } 
    }   

    public function edit($id)
    {
        // return view('admin.produk.edit');
        $model = produk::find($id);
        // if (is_null($model))
        // {
        //     return Redirect::route('admin.produk.index');
        // }
        return view('admin.produk.edit', compact('model'));
    }

    public function newMerek(Request $request)
    {   
        if ($request){ 
            $merek=Merek::create($request->all()); 
            return redirect('admin/produk/create');  
        }
    } 

    public function newKategori(Request $request)
    {   
        if ($request){ 
            $merek=Kategori::create($request->all()); 
            return redirect('admin/produk/create');  
        }
    } 

    public function newJenisproduk(Request $request)
    {   
        if ($request){ 
            $merek=Jenisproduk::create($request->all()); 
            return redirect('admin/produk/create');  
        }
    }    

    protected function path()
    {
        $path = 'image/produk/'; 
        return $path;
    } 
}
