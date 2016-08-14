<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Helpers\Helper;  
use App\kategori;
use Input; 

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::select('*')->orderBy('nama_kategori','asc')->get();

        return View::make('admin.kategori.index', compact('kategori')); 
    } 

    public function create()
    {             
        return View('admin.kategori.create'); 
    }

    public function store()
    {
        $kategori = Input::all();  
        if (kategori::create($kategori)) {  
            return redirect('admin/kategori/');
        } else {  
            return redirect('admin/kategori/');
        } 
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);
        if (is_null($kategori))
        {
            return Redirect::route('admin.kategori.index');
        }
        return View::make('admin.kategori.edit', compact('kategori'));
    }

    public function update()
    { 

        $input = Input::all(); 
        $kategori = kategori::find($input['id_kategori']); 
        if ($kategori->update($input)) { 
            return redirect('admin/kategori'); 
        } else {  
            return redirect('admin/kategori');
        } 
    }

    public function destroy($id)
    {
        $kategori = kategori::find($id); 
        if ($kategori->delete()) {
            return redirect('admin/kategori'); 
        }
        return redirect('admin/kategori'); 
    }



}
