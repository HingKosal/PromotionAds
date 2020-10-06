<?php

namespace App\Http\Controllers;
use App\Models\companies;
use App\User;
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
        $User = User::all(['id','username']);
        return view('Backend/configuration/company/create',compact('User'))->with('success','Company created Successfully!!');
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
            'company_name' => 'required|unique:companies,company_name',
            'location' => 'required',
            'phone' => 'required',
            'des',
            'user' => 'required',
        ]);
        $company = new companies([
            'company_name' => $request->get('company_name'),
            'location' => $request->get('location'),
            'phone' => $request->get('phone'),
            'description' => $request->get('des'),
            'user_id' => $request->get('user')
        ]);
        $company->save();
        return redirect()->route('company');
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
        $User = User::all(['id','username']);
        $companies = companies::find($id);
        $User1 = User::where('id','LIKE', $companies->user_id);
        return view('Backend.configuration.company.edit',compact('companies','User','User1'))->with('success','Update Company Successfully!!');
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
            'company_name' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'des',
            'user' => 'required',
        ]);
        $company = companies::find($id);
        $company->company_name = $request->company_name;
        $company->location = $request->location;
        $company->phone = $request->phone;
        $company->description = $request->des;
        $company->user_id = $request->user;

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
