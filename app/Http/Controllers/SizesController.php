<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sizes;
class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = sizes::paginate(5);
        return view('Backend/configuration/size/index', compact('size'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/configuration/size/create');
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
            'sname' => 'required',
            'des',
        ]);
        $size = new sizes([
            'size_name' => $request->get('sname'),
            'description' => $request->get('des'),
        ]);
        $size->save();
        return redirect()->route('size');
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
        $size = sizes::find($id);
        return view('Backend/configuration/size/show', compact('size'));
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
        $sizes = sizes::find($id);
        return view('Backend.configuration.size.edit',compact('sizes'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $size = sizes::where('size_name', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/configuration/size/index', compact('size'));
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
            'sname' => 'required',
            'des'
        ]);
        $size = sizes::find($id);
        //        dd($user);
        $size->size_name = $request->sname;
        $size->description = $request->des;
        $size->save();
        return redirect()->route('size');
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
        sizes::find($id)->delete();
        return redirect()->route('size');
    }
}
