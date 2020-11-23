<?php

namespace App\Exports;

use App\User;
use http\Env\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected  $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function view(): View
    {
        $users = User::whereIn('id',$this->id)->get();
        return view('Backend.manage-user.excel', compact('users'));
    }
}
