<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getIndex(){
		$feeds=Feedback:: where('showhide','show')
		->orderBy('id','DESC')
		->paginate(20);
	return view('feedback', compact('feeds'));
	}	
}
