<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function show($category){
        $products = Product::where('category', $category)->first();
        $product_category = Product_Category::all();
        return view('product_category', compact('products', 'product_category'));
    }
}
