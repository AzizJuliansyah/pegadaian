<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            
            return redirect('siswa')->with('success', 'Berhasil Login');
        } else{
            
            return redirect('sesi')->withErrors('Username dan Password salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return view('sesi/register');
    }

    

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Silakan masukkan email yang valid',
            'email.unique'=>'Email sudah terdaftar',
            'password.required'=>'password wajib diisi',
            'password.min'=>'Minimum password adalah 6 karakter'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            
            return redirect('User')->with('success', Auth::user()->name.' Berhasil Login');
        } else{
            
            return redirect('sesi')->withErrors('Username dan Password salah');
        }
    }
}
