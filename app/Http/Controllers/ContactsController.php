<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class ContactsController extends Controller
{

    public function index()
    {
        $category = categories::all(['id','title']);
        return view('Frontend/page/contact',compact('category'));
    }
    public function create()
    {
        return view('Frontend/page/contact');
    }

    public function header(){
        $category = categories::all(['id','title']);
        return view('Frontend.layout.header',compact('category'));
    }

    public function category($id){
        $category = categories::all(['id','title']);
        $product = DB::select('select * from products where category_id = ?', [$id]);
        return view('Frontend.page.category',compact('product','category'));
    }

    public function filter(Request $request)
    {
        $search = $request->get('search');
        $category = categories::all(['id','title']);
        $product = DB::table('products')->where('product_name', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Frontend.page.category', compact('product','category'));
    }

    public function about(){
        $category = categories::all(['id','title']);
        return view('Frontend.page.about',compact('category'));
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
