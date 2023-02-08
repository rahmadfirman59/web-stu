<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email Belum Diisi',
            'email.email' => 'Masukkan Email yang Valid',
            'password.required' => 'Password Belum Diisi'
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()->first()
            ];
        }

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            $request->session()->regenerate();
            return [
                'status' => 201,
                'message' => 'Login Berhasil'
            ];
        } else {
            return [
                'status' => 300,
                'message' => 'Email / Password yang anda masukkan salah'
            ];
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('admin');
    }
}
