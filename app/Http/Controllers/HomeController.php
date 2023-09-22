<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $data = siswa::all();
        return view('Home', compact('data'));
    }

    // public function hiro () {
    //     $data = siswa::all();
    //     return view('Hiro', compact('data'));
    // }

    public function show($id) {
        $data = Siswa::find($id);
        if (!$data) {
            return abort(404); 
        }
        return view('detail', compact('data'));
    }
}
