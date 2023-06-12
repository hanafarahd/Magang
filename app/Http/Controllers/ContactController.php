<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    

    public function contact(){

        $contact = Contact::all();
        return view('contact', compact('contact'));
    }
    
    public function insertcontact(Request $request){
        $name = $request->name;
        $kecil = strtolower($name);
        $hasil = str_replace(' ', '_', $kecil);

        $data = Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
        ]);

        $id = $data->id;
        Contact::where('id', '=', $id)->update([
            'slug'=>$id.'_'.$hasil,

        ]);
        return redirect("/contact");
    }
}
