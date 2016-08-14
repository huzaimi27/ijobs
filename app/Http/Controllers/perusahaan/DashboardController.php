<?php

namespace App\Http\Controllers\perusahaan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class DashboardController extends Controller {

//    public function __construct() {
//        // $this->middleware('admin');
//    }

    public function index() {
        return View('perusahaan.dashboard');
    }

    public function account() {
        return View('admin.account');
    }

    public function slider() {
        return View('admin.slider.create');
    }

    public function order() {
        return View('admin.order.index');
    }

}
