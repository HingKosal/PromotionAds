<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(5);
        return view('Backend/manage-user/index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/manage-user/create');
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
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required'
        ]);
        $user = new User([
            'first_name' => $request->get('fname'),
            'last_name' => $request->get('lname'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' =>Hash::make('password'),
            'password_confirmation' =>Hash::make('password_confirmation')
        ]);
        $user->save();
        return redirect()->route('user');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $user = User::where('username', 'LIKE', '%'.$search.'%')->paginate(5);
        return view ('Backend/manage-user/index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('Backend.manage-user.view',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('Backend.manage-user.edit',compact('users'));
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
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);
        $user = User::find($id);
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user');
    }
}
