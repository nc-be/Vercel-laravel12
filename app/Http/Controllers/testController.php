<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class testController extends Controller
{
    public function index(Request $request){

        $products = Product::orderBy('id','DESC')->get();

        return view('test',compact('products'));
    }
}
