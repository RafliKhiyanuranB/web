<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TambahController extends Controller
{
    public function tambahkontak () {
        return view('admin.tambahkontak');
    }

    public function tambahproject () {

        
        return view('admin.tambahproject');
    }

    
    public function tambahsiswa () {
        return view('admin.tambahsiswa');
        
    }

    public function storeSiswa(Request $request)
    {
        // // Atur aturan validasi
        // $rules = [
        //     'name' => 'required|string|max:255',
        //     'about' => 'required|string',
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi untuk file gambar
        // ];
    
        // // Pesan kesalahan yang akan ditampilkan jika validasi gagal
        // $messages = [
        //     'required' => ':attribute harus diisi.',
        //     'string' => ':attribute harus berupa teks.',
        //     'max' => ':attribute tidak boleh melebihi :max karakter.',
        //     'image' => ':attribute harus berupa file gambar.',
        //     'mimes' => ':attribute harus berupa file dengan tipe: :values.',
        //     'max' => ':attribute tidak boleh lebih dari :max kilobita.',
        // ];
    
        // // Validasi data input
        // $validator = Validator::make($request->all(), $rules, $messages);
    
        // // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
    
        // // Jika validasi berhasil, simpan data ke dalam database
        // $data = [
        //     'name' => $request->input('name'),
        //     'about' => $request->input('about'),
        //     'photo' => $request->file('photo')->store('photos', 'public'), // Simpan foto ke dalam direktori 'photos' dalam storage/public
        // ];
    
        // siswa::create($data);
    
        // // Redirect ke halaman yang sesuai
        // return redirect()->route('nama_rute_yang_diinginkan');

        $request->validate([
            'name'=>'required|min:5|max:100',
            'about'=>'required|min:10|max:100',
            'photo'=>'required|image',
            
        ]);
        $image= $request->file('photo')->store('siswa','public');

        siswa::create([
            'name'=> $request->name,
            'about'=> $request->about,
            'photo'=> $image,
        ]);
        return redirect()-> route('mastersiswa');
    }
    
    
}
