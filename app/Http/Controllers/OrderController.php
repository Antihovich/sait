<?php

namespace App\Http\Controllers;

use Auth;
use App\Order;
use App\Http\Requests\OrderRequest;
use App\Libs\Cookie;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function postIndex(OrderRequest $r){
    	$all = [];
		foreach($_GET as $key => $value){
			$id = (int)$key;
		    if($id>0){
			   $all[$id] = $value;
		 
	} 

}
  all 
    $body = serialize($all);
    $r['user_id'] = ( Auth::guest())?0:Auth::user()->id;
	$r['body'] = $body;
	Order::create($r->all());
   // foreach($_COOKIE as $key => $value){
	  //  $id = (int)$key;
		//if($id>0){
	//		  setcookie($id, '', time()-1, '/');
	//	}	
    //}

	//$cook =new Cookie;
//	$cook->deleteAll();	
    \App::make('\App\Libs\Cookie')->deleteAll();
	return redirect ()->back();
     }
}
	