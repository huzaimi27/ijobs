<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect; 
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Helpers\Helper;  
use App\merek;
use Input; 

class merekController extends Controller
{
    public function index()
    {
        $merek = merek::select('*')->orderBy('nama_merek','asc')->get();

        return View::make('admin.merek.index', compact('merek')); 
    } 

    public function create()
    {             
        return View('admin.merek.create'); 
    }

    public function store()
    {
        $merek = Input::all();  
        if (merek::create($merek)) {  
            return redirect('admin/merek/');
        } else {  
            return redirect('admin/merek/');
        } 
    }

    public function edit($id)
    {
        $merek = merek::find($id);
        if (is_null($merek))
        {
            return Redirect::route('admin.merek.index');
        }
        return View::make('admin.merek.edit', compact('merek'));
    }

    public function update()
    { 

        $input = Input::all(); 
        $merek = merek::find($input['id_merek']); 
        if ($merek->update($input)) { 
            return redirect('admin/merek'); 
        } else {  
            return redirect('admin/merek');
        } 
    }

    public function destroy($id)
    {
        $merek = merek::find($id); 
        if ($merek->delete()) {
            return redirect('admin/merek'); 
        }
        return redirect('admin/merek'); 
    }



}
