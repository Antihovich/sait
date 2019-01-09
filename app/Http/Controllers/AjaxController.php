<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Product;

class AjaxController extends Controller
{
    public Function(){
		$id = (int)$_POST('id');
		$obj = Product::find($id);
		return view('ajax.modal', compact('obj'));
	}
}
