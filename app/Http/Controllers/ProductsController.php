<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Category;
class ProductsController extends Controller
{
    public function list() {
        $products = product::get();
        foreach ($products as $product ) {
            if ($product->cat_id) {
                $product['cat_name']="-".Category::find($product->cat_id)->name;
            }
            else
            {
                $product['cat_name']="بدون دسته بندی";
            }
        }
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
        if ($req->hasfile('img')) {
            $file = $req->file("img");
            $fileName = time() .".". $file->getclientoriginalextension() ;
            $destinationPath = 'files/products/' ;
            $file->move($destinationPath,$fileName);
            $Product->img=$destinationPath . $fileName;
        }
        $Product->save();
        return  redirect('/admin/products');
    }
    public function delete($id) {
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function deleteImg($id) {
        $product = Product::find($id);
        $product->img="files/products/default.jpg";
        $product->save();
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
        if ($req->hasfile('img')) {
            $file = $req->file("img");
            $fileName = time() .".". $file->getclientoriginalextension() ;
            $destinationPath = 'files/products/' ;
            $file->move($destinationPath,$fileName);
            $Product->img=$destinationPath . $fileName;
        }
        $Product->save();
        return redirect('/admin/products');
    }
}
