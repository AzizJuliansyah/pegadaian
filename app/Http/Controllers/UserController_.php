<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    // function index(){
    //     $user = User::all();
    //     return $user;
    // }

    // public function detail($id)
    // {
    //     $user = User::where('email', $id)->first();
    //     return view('user/index')->with('data', $user);
    // }

    function index(){
        $user = User::orderBy('id', 'desc')->paginate(5);
        return view('User/index')->with('user', $user);
    }

    function detail($id){
        
    }

    public function destroy($id)
    {
        $data = User::where('nomor_induk', $id)->first();
        File::delete(public_path('foto').'/'.$data->foto);

        User::where('nomor_induk', $id)->delete();
        return redirect('/siswa')->with('success', 'Berhasil menghapus data');
    }
}
