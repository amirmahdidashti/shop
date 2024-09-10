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
        $cats = Category::get();
        return view('admin.product.insert',compact('cats'));
    }
    public function insertPost(Request $req) {
        $Product = new Product();
        $Product->name = $req->name; 
        $Product->price = $req->price; 
        $Product->desc = $req->desc; 
        $Product->cat_id = $req->cat_id;
        $Product->save();
        return redirect()->back();
    }
    public function delete($id) {
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function editGet($id) {
        $cats = Category::get();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','cats'));
    }
    public function editPost(Request $req , $id) {
        $Product = Product::find($id);
        $Product->name = $req->name; 
        $Product->price = $req->price; 
        $Product->desc = $req->desc; 
        $Product->cat_id = $req->cat_id;
        $Product->save();
        return redirect('/admin/products');
    }
}
