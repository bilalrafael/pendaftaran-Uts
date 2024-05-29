<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function registrasi(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'asal' => 'required',
            'nim' => 'required',
            'telp' => 'required',
            'agama' => 'required',
            'jk' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        mahasiswa::create( [
            'nama' => $request->nama,
            'asal' => $request->asal,
            'nim' => $request->nim,
            'telp' => $request->telp,
            'agama' => $request->agama,
            'jk' => $request->jk,
        ]);
        return redirect('/tabel');
    }

    function tabel(){
        $d = mahasiswa::get();
        return view('tabel',compact('d'));
    }

    function delete(Request $request, $id){
        $hapus = mahasiswa::find($id);

        if ($hapus){
            $hapus->delete(); 
        }
        return back();
    }

    function tolak($id) {
        mahasiswa::where('id', $id)->update(['status' => 'belum']);
        return back();
    }
    function terima($id) {
        mahasiswa::where('id', $id)->update(['status' => 'selesai']);
        return back();
    }

}
