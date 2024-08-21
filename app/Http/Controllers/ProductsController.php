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
}
