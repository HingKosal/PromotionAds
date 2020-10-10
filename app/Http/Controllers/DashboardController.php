<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\companies;
use App\Models\products;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count()
    {
        $user = User::all();
        $product = products::all();
        $company = companies::all();
        return view('Backend/dashboard/dashboard1', compact('user','product', 'company'));
    }
}
