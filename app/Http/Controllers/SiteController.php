<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Category;
class SiteController extends Controller
{
    public function index() {
        $cats = category::get();
        return view('index',compact('cats'));
    }
    public function products($cat_id) {
        $products = product::where('cat_id','=',$cat_id)->get();
        $cat_name = category::where('id','=',$cat_id)->first()->name;
        return view('products',compact('products','cat_name'));
    }
    public function product($id) {
        $product = product::where('id','=',$id)->first();
        return view('product',compact('product'));
    }
}
