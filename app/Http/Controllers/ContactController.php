<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index(){
        $contact = Contact::all();
        return $contact;
    }

    public function tambahcontact(){
        return view('tambahcontact');
    }
    public function insertcontact(Request $request){
       
        $name = $request->name;
        $kecil = strtolower($name);
        $hasil = str_replace(' ', '_', $kecil);
        // Pada sisi kanan, yaitu proses dan kiri, yaitu hasil [NOTES]
        
        
        $data=Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,  
            // Lihat pada view tampilpost $request mengambil data dari 'name' [NOTES]
        ]);

        $id = $data->id;
        Contact::where('id', '=', $id)->update([
            'slug'=>$id.'_'.$hasil,

        ]);
        return redirect()->route('post')->with('success','Contact Berhasil di Tambahkan');
    }

    
    public function tampilkancontact ($id){
        $contact = Contact::find($id);
        return view('tampilcontact',compact('contact'));
    }
    


}
