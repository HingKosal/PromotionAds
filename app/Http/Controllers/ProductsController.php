<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

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
        return view('Backend/manage-promotion/index', compact('product'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/manage-promotion/create');
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
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'image' => 'required',
            'size_id' => 'required',
            'user_id' => 'required',
           ]
           );

           $product = new products([
               'product_name' => $request->get('product_name'),
               'category_id' => $request->get('category_id'),
               'brand_id' => $request->get('brand_id'),
               'price' => $request->get('price'),
               'discount' => $request->get('discount'),
               'description' => $request->get('description'),
               'image' => $request->get('image'),
               'size_id' => $request->get('size_id'),
               'user_id' => $request->get('user_id'),

           ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($promotion_id)
    {
        $product = products::find($promotion_id);
        return view('Backend/manage-promotion/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $promotion_id)
    {
        $this->validate( $request,
           [
            'product_name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'image' => 'required',
            'size_id' => 'required',
            'user_id' => 'required',
           ]
           );
           $product = products::find($promotion_id);
           $product ->product_name = $request->product_name;
           $product ->category_id = $request->category_id;
           $product ->brand_id = $request->brand_id;
           $product ->price = $request->price;
           $product ->discount = $request->discount;
           $product ->description = $request->description;
           $product ->image = $request->image;
           $product ->size_id = $request->size_id;
           $product ->user_id = $request->user_id;
           $product->save();
           return redirect()->route('product');


    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $product = products::where('promotion_id', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/manage-promotion/search', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($promotion_id)
    {
        products :: find($promotion_id)->delete();
        return redirect()->route('product')->with(['message'=> 'Successfully deleted!!']);;
    }
}
