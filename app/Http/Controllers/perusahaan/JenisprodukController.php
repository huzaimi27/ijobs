<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Helpers\Helper;  
use App\jenisproduk;
use Input; 

class jenisprodukController extends Controller
{
    public function index()
    {
        $jenisproduk = jenisproduk::select('*')->orderBy('nama_jenis_produk','asc')->get();

        return View::make('admin.jenisproduk.index', compact('jenisproduk')); 
    } 

    public function create()
    {             
        return View('admin.jenisproduk.create'); 
    }

    public function store()
    {
        $jenisproduk = Input::all();  
        if (jenisproduk::create($jenisproduk)) {  
            return redirect('admin/jenisproduk/');
        } else {  
            return redirect('admin/jenisproduk/');
        } 
    }

    public function edit($id)
    {
        $jenisproduk = jenisproduk::find($id);
        if (is_null($jenisproduk))
        {
            return Redirect::route('admin.jenisproduk.index');
        }
        return View::make('admin.jenisproduk.edit', compact('jenisproduk'));
    }

    public function update()
    { 
        $input = Input::all();
        $jenisproduk = jenisproduk::find($input['id']); 
        if ($jenisproduk->update($input)) { 
            return redirect('admin/jenisproduk'); 
        } else {  
            return redirect('admin/jenisproduk');
        } 
    }

    public function destroy($id)
    {
        $jenisproduk = jenisproduk::find($id); 
        if ($jenisproduk->delete()) {
            return redirect('admin/jenisproduk'); 
        }
        return redirect('admin/jenisproduk'); 
    }

}