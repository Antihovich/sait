<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class ProductController extends Controller
{
    public function getAll(){
		 $cats = Category::all();
		 return view('cats', compact('cats'));
	} 
}
