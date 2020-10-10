<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactsController extends Controller
{

    public function index()
    {
        return view('Frontend/page/contact');
    }
    public function create()
    {
        return view('Frontend/page/contact');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' =>$request->get('message')
        ]);
        $contact->save();
        return redirect()->route('contact')->with(['message'=> 'Your message has been sent!!']);
    }



}
