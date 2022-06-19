<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $api_url = 'https://fakestoreapi.com/products';

        $products = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $products = json_decode($products);
        
        return view('home')->with('products',$products);
    }

    public function viewProduct($id)
    {
        $api_url = 'https://fakestoreapi.com/products/'.$id;

        $product = json_decode(file_get_contents($api_url));

        return view('product')->with('product',$product);
    }
}
