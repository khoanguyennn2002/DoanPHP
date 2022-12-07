<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menProducts=Product::where('feature',true)->where('categoryid',1)->get();
        $womenProducts=Product::where('feature',true)->where('categoryid',2)->get();
  

        return view('front.index',compact('menProducts','womenProducts'));
    }
}
