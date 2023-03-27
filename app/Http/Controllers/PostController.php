<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function blog(){

        $post = Post::all();
        // dd($data);
        return view('posts', compact('post'));
    }

    public function tambahpost(){
        return view('tambahpost');
    }

    public function insertpost(Request $request){
       
        $title = $request->title;
        $kecil = strtolower($title);
        $hasil = str_replace(' ', '_', $kecil);
        // Pada sisi kanan, yaitu proses dan kiri, yaitu hasil [NOTES]
        
        
        $data=Post::create([
            'title'=> $request->title,
            'summernote'=> $request->summernote,
            'category'=> $request->category,
            'tayang'=> $request->tayang,  
            // Lihat pada view tampilpost $request mengambil data dari 'name' [NOTES]
        ]);

        $id = $data->id;
        Post::where('id', '=', $id)->update([
            'slug'=>$id.'_'.$hasil,

        ]);
        
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('imagepost/', $request->file('gambar')->getClientOriginalName());
            $data->image = $request->file('gambar')->getClientOriginalName();
            $data->save();
        } 
        // Form gambar masuk pada kolom image [NOTES]

        return redirect()->route('post')->with('success','Post Berhasil di Tambahkan');
    }

    public function tampilkanpost ($id){
        $post = Post::find($id);
        // dd($data);
        return view('tampilpost',compact('post'));
    }

    public function updatepost (Request $request , $id){
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('post')->with('success','Post Berhasil di Update');
    }

    public function deletepost ($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post')->with('success','Post Berhasil di Hapus');
    }


    //Blog Controller
    public function index(){
        $katalog = app()->make('App\Http\Controllers\KatalogController')->index();
        $blog = Post::all();
        // dd($katalog);
        return view('blog', compact('blog','katalog'));
    }

    public function blogs_details(){
        $blog = Post::all();
        // dd($blog);
        
        return view('blogs', compact('blog'));
    }
                
    public function blog_details($slug){
        $blog = Post::where('slug','=',$slug)->first();
        //dd($blog);
        
        return view('blog-details', compact('blog'));
    }


}

    







// [NOTES] - controller sama tidak masalah, tetapi func dari controller dan url yang diakses harus berbeda
// [NOTES] -
// eloquent where laravel (query)
// eloquent orde by