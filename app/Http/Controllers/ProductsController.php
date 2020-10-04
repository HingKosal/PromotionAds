<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\brands;
use App\Models\sizes;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = products::paginate(10);
        return view('Backend/manage-promotion/index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = categories::all(['id','title']);
        $brand = brands::all(['id','brand_name']);
        $size = sizes::all(['id','size_name']);
        return view('Backend/manage-promotion/create',compact('category','brand','size')) ->with('success','product created successfully');
        //return view('Backend/manage-promotion/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate( $request,
           [
            'product_name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required',
            
           ]
           );

           

           $product = new products([
               'product_name' => $request->get('product_name'),
               'category' => $request->get('category'),
               'brand' => $request->get('brand'),
               'price' => $request->get('price'),
               'discount' => $request->get('discount'),
               'description' => $request->get('description'),
               'size' => $request->get('size'),

               
              

           ]);

           if ($request->hasFile('image')) {
            $image = $request->file('image');
            $product = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $product);
            
        }
           
           $product->save();
           return redirect()->route('product');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = products::find($id);
        return view('Backend/manage-promotion/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $product = products::find($id);
        $category = categories::all(['id','title']);
        $brand = brands::all(['id','brand_name']);
        $size = sizes::all(['id','size_name']);
        return view('Backend/manage-promotion/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request,
           [
            'product_name' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'image' => 'required',
            'size' => 'required',
            
           ]
           );
           $product = products::find($id);
           $product ->product_name = $request->product_name;
           $product ->category = $request->category;
           $product ->brand = $request->brand;
           $product ->price = $request->price;
           $product ->discount = $request->discount;
           $product ->description = $request->description;
           $product ->image = $request->image;
           $product ->size = $request->size;
           $product->save();
           return redirect()->route('product');


    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = products::where('id', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/manage-promotion/search', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        products :: find($id)->delete();
        return redirect()->route('product')->with(['message'=> 'Successfully deleted!!']);;
    }
}
