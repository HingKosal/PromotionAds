<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExportEmail implements FromView
{
//    protected  $id;
//
//    function __construct($id) {
//        $this->id = $id;
//    }

    public function view(): View
    {
        $fname = request()->fname;
        $check_fname = request()->check_fname;
        $lname = request()->lname;
        $check_lname = request()->check_lname;
        $username = request()->username;
        $check_username = request()->check_username;
        $email = request()->email;
        $check_email = request()->check_email;

        $user = DB::table('users');

        if($fname && $check_fname){
            $users1 = $user->select('first_name')->get();
            return view('Backend.manage-user.excelCheckbox', compact('users1'));
        }
        if($lname && $check_lname){
            $users2 = $user->select('last_name')->get();
            return view('Backend.manage-user.excelCheckbox', compact('users2'));
        }
        if($username){
            $user1 =  $user->select('username');
        }
        if($email){
            $user1 = $user->select('email');
        }
        if ($fname && $lname){
            $user1 = $user->select('first_name','last_name');
        }
        if ($fname && $username){
            $user1 = $user->select('first_name','username');
        }
        if ($fname && $email){
            $user1 = $user->select('first_name','email');
        }
        if ($lname && $username){
            $user1 = $user->select('last_name','username');
        }
        if ($lname && $email){
            $user1 = $user->select('last_name','email');
        }
        if ($username && $email){
            $user1 = $user->select('username','email');
        }
        if ($fname && $lname && $username){
            $user1 = $user->select('first_name','last_name','username');
        }
        if ($fname && $lname && $email){
            $user1 = $user->select('first_name','last_name','email');
        }
        if ($fname && $username && $email){
            $user1 = $user->select('first_name','username','email');
        }
        if ($lname && $username && $email){
            $user1 = $user->select('last_name','username','email');
        }
        if ($fname && $lname && $username && $email){
            $user1 = $user->select('first_name','last_name','username','email');
        }

//        $users = $user->get();
//        return view('Backend.manage-user.excelCheckbox', compact('users'));

    }

}
