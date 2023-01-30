<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    function index(){
        $data = siswa::all();
        // return view('siswa/print');
        return view('info/index')->with('data', $data);
    }
    function detail($id)
    {
        
        $data = siswa::where('nomor_induk', $id)->first();
        return view('info/index')->with('data', $data);
    }
}
