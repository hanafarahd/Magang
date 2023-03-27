<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KunciJawaban;

class KunciJawabanController extends Controller
{
    public function data(){

        $post = KunciJawaban::all();
        return view('kuncijawaban', compact('post'));
    }

    public function tambahkuncijawaban(){
        return view('tambahkuncijawaban');
    }

    public function insertkuncijawaban(Request $request){
        
        $title = $request->title;
        $kecil = strtolower($title);
        $hasil = str_replace(' ', '_', $kecil);
        // Pada sisi kanan, yaitu proses dan kiri, yaitu hasil [NOTES]
        
        $data = KunciJawaban::create([
            'title'=> $request->title,
            'summernote'=> $request->summernote,
            'tayang'=> $request->tayang,
            'password'=> $request->password,  
            // Lihat pada view tampilpost $request mengambil data dari 'name' [NOTES]
        ]);

        $id = $data->id;
        KunciJawaban::where('id', '=', $id)->update([
            'slug'=>$id.'_'.$hasil,

        ]);
        return redirect()->route('kuncijawaban')->with('success','Kunci Jawaban Berhasil di Tambahkan');
    }

    public function tampilkankuncijawaban ($id){
        $post = KunciJawaban::find($id);
        // dd($data);
        return view('tampilkuncijawaban',compact('post'));
    }

    public function updatekuncijawaban (Request $request , $id){
        $post = KunciJawaban::find($id);
        $post->update($request->all());
        return redirect()->route('kuncijawaban')->with('success','Kunci Jawaban Berhasil di Update');
    }

    public function deletekuncijawaban ($id){
        $post = KunciJawaban::find($id);
        $post->delete();
        return redirect()->route('kuncijawaban')->with('success','Kunci Jawaban Berhasil di Hapus');
    }
}
