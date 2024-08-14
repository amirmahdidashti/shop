<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('index');
    }
    public function product($id) {
        return view('product',compact('id'));
    }
    public function products($cat_id) {
        return view('products',compact('cat_id'));
    }
}
