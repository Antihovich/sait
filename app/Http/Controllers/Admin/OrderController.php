<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller {

	/**
	 * Index page
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index()
    {
		$all = Order::orderBy('id','DESC')->paginate(10);
		return view('admin.order.index', compact('all'));
	}
	public function getindex($id=nul){
		$obj = Order::find($id);
		return view ('admin.order.one', compact('obj'));
	}

}