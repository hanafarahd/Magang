<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function blog(){

        $post = Post::all();
        return view('posts', compact('post'));
    }

    public function tambahpost(){
        return view('tambahpost');
    }

    public function insertpost(Request $request){
       
        $title = $request->title;
        $kecil = strtolower($title);
        $hasil = str_replace(' ', '_', $kecil);
        // [NOTES] - Pada sisi kanan, yaitu proses dan kiri, yaitu hasil
        // [NOTES] - request diatas untuk mengambil data dari form yang id tadi
        
        
        $data=Post::create([
            'title'=> $request->title,
            'summernote'=> $request->summernote,
            'category'=> $request->category,
            'tayang'=> $request->tayang,  
            // [NOTES] - Lihat pada view tampilpost $request mengambil data dari 'name'
            // [NOTES] - create untuk tabel
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
        // [NOTES] - Form gambar masuk pada kolom image

        return redirect()->route('post')->with('success','Post Berhasil di Tambahkan');
    }

    public function tampilkanpost ($id){
        $post = Post::find($id);
        // [NOTES] - Mengambil data berdasarkan id

        return view('tampilpost',compact('post'));
    }

    public function updatepost (Request $request , $id){
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('post')->with('success','Post Berhasil di Update');
    }

    public function deletepost ($id){
        $post = Post::find($id);
        // ini kenapa pakai find??
        $post->delete();
        return redirect()->route('post')->with('success','Post Berhasil di Hapus');
    }


    // Controller view Blog JPBooks
    public function index(){
        $katalog = app()->make('App\Http\Controllers\KatalogController')->index();
        $kjawabans = app()->make('App\Http\Controllers\KunciJawabanController')->index();
        // $contact= app()->make('App\Http\Controllers\ContactController')->index();
        $blog = Post::take(3)->get();
        // [NOTES] - untuk limit atau pagination pada artikel.
        // dd($katalog);
        return view('blog', compact('blog','katalog','kjawabans'));
    }
    
    // Controller Artikel view Blogs JPBooks
    public function blogs_details(){
        $blog = Post::select(
            "posts.title",
            "posts.slug",
            "posts.image",
            "posts.category",
            "posts.summernote",
            "posts.id"
        )
        ->where('posts.tayang','=','iya')->get();

        //  dd($blog);
        return view('blogs', compact('blog'));
    }

    // Controller About view About JPBooks
    public function about(){
        return view('about');
    }

    // Controller Artikel view Blog Details JPBooks
    public function blog_details($slug){
        $blog = Post::where('slug','=',$slug)->first();
        //dd($blog);
        $recent = Post::take(3)->get();
        $category = Post::get();
        // dd($recent);
        return view('blog-details', compact('blog','recent','category'));
    }
    

}

    







// [NOTES] - controller sama tidak masalah, tetapi func dari controller dan url yang diakses harus berbeda
// [NOTES] - where untuk mencari data yang sama dan slug itu uniqe
// [NOTES] - get query untuk menampilkan seluruh data
// [NOTES] - nama foreach setelah as tidak boleh sama dengan nama compact

// [Keyword Search] - pengertian query laravel 8 atau perintah
// [Keyword Search] - eloquent where laravel (query)
// [Keyword Search] - eloquent order by (untuk pengurutan)