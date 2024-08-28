<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Category;
class ProductsController extends Controller
{
    public function list() {
        $products = product::get();
        return view('admin.product.list',compact('products'));
    }
    public function insertGet() {
        return view('admin.product.insert');
    }
    public function insertPost(Request $req) {
        $Product = new Product();
        $Product->name = $req->name; 
        $Product->price = $req->price; 
        $Product->desc = $req->desc; 
        $Product->save();
        return redirect()->back();
    }
}
