<?php

namespace App\Http\Controllers;
use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = companies::paginate(5);
        return view('Backend/configuration/company/index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/configuration/company/create');
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
            'product_name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'des' => 'required'
        ]);
        // $company = new companies([
        //     'company_name' => $request->get('cname'),
        //     'location' => $request->get('price'),
        //     'phone' => $request->get('discount'),
        //     'description' => $request->get('des'),
        // ]);
        // $company->save();
        // return redirect()->route('company');
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
        $company = companies::find($id);
        return view('Backend/configuration/company/show', compact('company'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $company = companies::where('id', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/configuration/company/search', compact('company'));
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
        $companies = companies::find($id);
        return view('Backend.configuration.company.edit',compact('companies'));
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
            'lo_name' => 'required',
            'des' => 'required',
            'phone' => 'required',
            'user_id' => 'required',
        ]);
        $company = companies::find($id);
        //        dd($user);
        $company->company_name = $request->cname;
        $company->location = $request->lo_name;
        $company->phone = $request->phone;
        $company->description = $request->des;
        $company->user_id = $request->user_id;
        $company->save();
        return redirect()->route('company');
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
        companies::find($id)->delete();
        return redirect()->route('company');
    }
}
