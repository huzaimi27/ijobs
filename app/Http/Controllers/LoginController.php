<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Encryption\BaseEncrypter;
use Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('adminToko.login');
    }


    public function LoginToko(Request $request){
        $toko = auth('toko');
        if ($toko->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect('adminToko/dashboard');
        } else {
            return redirect('adminToko');
        }
    }

    public function Logout(){
        auth('toko')->logout();
        return redirect('/');
    }

    public function customerRegister(Request $request){

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:tb_agens',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = $request->input();

        $get_last_id_agen = customer::orderBy('idx_agen','DESC')->take(1)->first();
        if (!$get_last_id_agen){
            $get_last_id_agen = new Object_();
            $get_last_id_agen->idx_agen = '0';
            $get_last_id_agen->id_agen = 0;
        }
        $cd_agen = 'CUS'.date('dhis').$get_last_id_agen->idx_agen;
        customer::create([
            'id_agen' => $get_last_id_agen->idx_agen + 1,
            'nm_agen' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cd_agen' => $cd_agen,
            'status_user' => 'customer',
            'fl_active' => '0'
        ]);

        /*$customer = auth('customer');
        $credential = ['email'=>$data['email'],'password'=>$data['password']];

        if ($customer->attempt($credential)){
            if ($request->has('plan')){
                return redirect('umroh/pengisian-data-kontak/'.$request->input('plan'));
            } else {
                return redirect('akun');
            }
        } else {
            if ($request->has('plan')){
                return redirect('umroh/pengisian-data-kontak/'.$request->input('plan'));
            } else {
                return redirect('masuk-jamaah');
            }
        }*/
        $token = encrypt($cd_agen);
        $password = encrypt($data['password']);
        Mail::send('app.page.login.email_verifikasi',compact('token','password','data'),function($message) use ($data){
            $message->to($data['email'],$data['name'])->subject('Validasi Email');
        });

        $register = true;
        $state = 'login.customer';
        return view('app.page.login.customer#daftar',compact('register','state'));
//        return redirect('/masuk-jamaah')->with('register','state');
    }

    public function loginAdmin(){
        if (!auth('admin')->user()){
            return view('app.page.login.admin');
        } else {
            return redirect('admin');
        }
    }

    public function postLoginAdmin(Request $request){
        $data = $request->input();
        $admin = auth('admin');
        $credential = ['cd_user'=>$data['user'],'password'=>$data['password'],'fl_active'=>'1'];
        if ($admin->attempt($credential)){
            return redirect('admin');
        } else {
            return redirect('admin-login');
        }
    }

    public function verifikasiEmail($token,$password){
        $cd_agen = decrypt($token);
        $customer = customer::where('cd_agen','=',$cd_agen)->first();
        if (!is_null($customer)){
            $customer->fl_active = '1';
            $customer->save();
        }
        return view('app.page.login.halaman_verifikasi',compact('customer','password'));
    }
}
