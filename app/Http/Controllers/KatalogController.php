<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function show(){

        $post = Katalog::all();
        return view('katalog', compact('post'));
    }

    public function tambahkatalog(){
        return view('tambahkatalog');
    }

    public function insertkatalog(Request $request){
        
        $title = $request->title;
        $kecil = strtolower($title);
        $hasil = str_replace(' ', '_', $kecil);
        // Pada sisi kanan, yaitu proses dan kiri, yaitu hasil [NOTES]
        
        $data = Katalog::create([
            'title'=> $request->title,
            'summernote'=> $request->summernote,
            'category'=> $request->category,
            'tayang'=> $request->tayang,  
            // Lihat pada view tampilpost $request mengambil data dari 'name' [NOTES]
        ]);

        $title = $data->title;
        Katalog::where('title', '=', $title)->update([
            'slug'=>$title.'_'.$hasil,

        ]);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('imagekatalog/', $request->file('gambar')->getClientOriginalName());
            $data->image = $request->file('gambar')->getClientOriginalName();
            $data->save();
        } 
        return redirect()->route('katalog')->with('success','Katalog Berhasil di Tambahkan');
    }

    public function tampilkankatalog ($id){
        $post = Katalog::find($id);
        // dd($data);
        return view('tampilkatalog',compact('post'));
    }

    public function updatepost (Request $request , $id){
        $post = Katalog::find($id);
        $post->update($request->all());
        return redirect()->route('katalog')->with('success','Katalog Berhasil di Update');
    }

    public function deletekatalog ($id){
        $post = Katalog::find($id);
        $post->delete();
        return redirect()->route('katalog')->with('success','Katalog Berhasil di Hapus');
    }
    


    // Controller Katalog view Blog JPBooks
    public function index(){
        $katalog = Katalog::all();
        // dd($data);
        // dd($katalog);
        return $katalog;
    }

    public function katalog_details($slug){
        $katalog = Katalog::where('slug','=',$slug)->first();
        // dd($katalog);
        
        return view('katalog-details', compact('katalog'));
    }
}
