<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brands::paginate(5);
        return view('Backend/configuration/brand/index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/configuration/brand/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'brand_name' => 'required',
        ]);

        $brand = new brands([
            'brand_name' => $request->get('brand_name'),
            'description' => $request->get('des'),
        ]);
        $brand->save();
        return redirect()->route('brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = brands::find($id);
        return view('Backend/configuration/brand/show', compact('brand'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $brand = brands::where('brand_name', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/configuration/brand/index', compact('brand'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = brands::find($id);
        return view('Backend.configuration.brand.edit',compact('brand'));
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
        $this->validate($request,[
            'brand_name' => 'required',
            'des'
        ]);
        $brand = brands::find($id);
        $brand->brand_name = $request->brand_name;
        $brand->description = $request->des;
        $brand->save();
        return redirect()->route('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        brands::find($id)->delete();
        return redirect()->route('brand');
    }
}
