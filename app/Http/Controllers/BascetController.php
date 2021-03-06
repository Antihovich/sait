<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BascetController extends Controller
{
		public function getIndex(){
			echo 'ok';
		}	
		public function getAdd($id=null){
			setcookie($id,'1', time()+3600,'/');
			return redirect()->back();
		}
		public function getAll(){
			$arr = [];
			$products = [];
			foreach($_COOKIE as $key => $value){
				$id = (int)$key;
				if($id > 0){
					$arr[$id] = $value;
					$products[$id]=Product::find($id);
				}
		  }
		  return view('basket', compact('arr','products'));
		}																																  
		public function getDell($id){
			setcookie ($id, '', time()-1, '/');
			return redirect()->back();
	    }
		public function getClear(){
			foreach($_COOKIE as $key => $value){
				$id =(int)$key;
				if($id>0){
					setcookie($id, '', time()-1, '/');
				}
		  }
			return redirect()->back();
	   }
	   public function index()
	   {
		    return view('orderreg');
	   }	
}
