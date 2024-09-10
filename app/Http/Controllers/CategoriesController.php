<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Category;

class CategoriesController extends Controller
{
    public function list() {
        $Categories = Category::get();
        return view('admin.categories.list',compact('Categories'));
    }
    public function insertGet() {
        return view('admin.categories.insert');
    }
    public function insertPost(Request $req) {
        $cat = new Category();
        $cat->name = $req->name; 
        $cat->save();
        return redirect()->back();
    }
    public function delete($id) {
        Category::find($id)->delete();
        return redirect()->back();
    }
    
    public function editGet($id)
    {
        $Category = Category::find($id);
        return view('admin.categories.edit',compact('Category'));
    }
    public function editPost(Request $req,$id)
    {
        $Category = Category::find($id);
        $Category->name = $req->name;
        $Category->save();
        return redirect('admin/categories');
    }
    
}
