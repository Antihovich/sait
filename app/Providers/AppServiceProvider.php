<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Order;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order:: created (function($obj){
			
			if(isset($obj->email)){
			$user_email = $obj->email;
			$name = $obj->name;
			}elseif (Auth::user()){
            $user_email = Auth::user()->email;
			$name = Auth::user()->name;
			}
		
		$thema = "Уважаемый $name , Вам сообщение с сайта";
		$body = '<h1> Текст </h1>';
	// create header
	$header = 'MiME-Version: 1.0'. "\r\n";
	$header .='Content-type: text/html; charset-UTF-8' . "\r\n";
	$header .='From: ' . env('MAIL_FROM_ADDRESS')."\r\n";
     @mail($user_emal, $thema, $body, $header);
	 @mail( env('MAIL_FROM_ADDRESS'),$user_emal, $thema, $body, $header);
	 
	 });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
