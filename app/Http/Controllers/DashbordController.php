<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DashbordController extends Controller
{
    public function index()
    {
        $data ['title'] = 'Dashbord';
        $data ['user'] = User::all()->count();
        $data ['category'] = Category::all()->count();
        $data['products'] = Product::all()->count();

        return view('dashbord.dashbord', $data);
    }
}
