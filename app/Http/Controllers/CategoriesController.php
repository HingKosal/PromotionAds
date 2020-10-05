<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = categories::paginate(5);
        return view('Backend/category/index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'cname' => 'required',
            'des' => 'required'
        ]);
        $category = new categories([
            'title' => $request->get('cname'),
            'description' => $request->get('des'),
        ]);
        $category->save();
        return redirect()->route('category');
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
        $category = categories::find($id);
        return view('Backend/category/show', compact('category'));      
       
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $category = categories::where('id', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/category/search', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = categories::find($id);
        return view('Backend.category.edit',compact('categories'));
        
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
        //
        $this->validate($request,[
            'cname' => 'required',
            'des' => 'required'
        ]);
        $category = categories::find($id);
        //        dd($user);
        $category->title = $request->cname;
        $category->description = $request->des;       
        $category->save();
        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        categories::find($id)->delete();
        return redirect()->route('category');
    }
}
