<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function masterkontak () {
        return view('admin.masterkontak');
    }

    
    public function masterproject () {
        return view('admin.masterproject');
    }

    
    public function mastersiswa () {
        $siswas = siswa::all();
        return view('admin.mastersiswa', compact('siswas'));
    }

    public function destroy($id){
    $siswa = Siswa::find($id);

    if (!$siswa) {
        return redirect()->route('mastersiswa')->with('error', 'Siswa not found.');
    }

    // Delete the Siswa
    $siswa->delete();

    return redirect()->route('mastersiswa')->with('success', 'Siswa deleted successfully.');
    }

}
