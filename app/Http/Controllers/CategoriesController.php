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
}
