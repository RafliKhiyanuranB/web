<?php

namespace App\Http\Controllers;

use App\Models\Siswa; 
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function editKontak() { 
        return view('admin.editkontak');
    }

    public function editProject() { 
        return view('admin.editproject');
    }

    public function editSiswa($id) {
        $data = Siswa::find($id);
        
        if (!$data) {
            return abort(404); 
        }
        
        return view('admin.editsiswa', compact('data'));
    }

    public function editsiswaprocess(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'about'=>'required',
            'photo'=>'image',
            
        ]);

        if($request->file('photo')) {
            $image= $request->file('photo')->store('siswa','public');
    
            siswa::find($id)->update([
                'name'=> $request->name,
                'about'=> $request->about,
                'photo'=> $image,
            ]);
        } 
        else{
            siswa::find($id)->update([
                'name'=> $request->name,
                'about'=> $request->about,
            ]);
        }

        return redirect()-> route('mastersiswa');


    }
}


