<!DOCTYPE html>
  <html lang="ru">
    <head>
	 <meta charset="utf-8">
	 <meta name="description" content="1,2,3 предложения">
	 <meta name="keywords" content="выражения через ,">
	 <meta name="author" content="Antihovich">
	 <title>Название сайта</title>
	 <link type="text/css" rel="stylesheet" href={{asset("media/bootstrap/css/bootstrap.min.css")}}>
	 <link type="text/css" rel="stylesheet" href={{asset("media/css/style.css")}} />
	 @section('stiles')
	 @show
	 @section('scripts')
	 @show
	 
	</head>
	<body>
	 <div id="header">
	  <h1 id="logotext">Varlamov Studio</h1>
	  <img id="logo" src="media/img/logo.jpg"/>
	  </div>
	  <nav class="topmenu">
	  <a href={{asset("/")}}>Главная</a>
	  <a href={{asset("menu")}}>Меню</a>
	  <a href={{asset("about")}}>О нас</a>
	  <a href={{asset("servises")}}>Услуги</a>
	  <a href={{asset("categories")}}>Товары</a>
	   <a href={{asset("contacts")}}>Контакты</a>
	    @guest
                           
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         
                           
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                           
                        @else
                            
                                <a  href="{{asset('home')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            
                        @endguest
	   </nav>
	   <div class="col-md-2">
	   

	   @foreach($v_catalogs as $one)
	   <a href="{{asset('catalog/'.$one->id)}}" class="btn btn-primary btn-block">
		   {{$one->name}}
		</a>   
		@endforeach
	 	   <a href="feedback" class="btn btn-default btn-block">Отзывы</a>
	 
	   </div>
	   <div class="col-md-8">
@yield('content')
	   </div>	  
	   <div class="col-md-2">
<a href="{{asset('basket')}}" class="btn btn-lg btn-block btn-primary">Моя корзина ({{$cookie_caunt}})</a>

<table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
<tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
</td></tr>
<tr><td>

<table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
<tr><td>
<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_3.js"></script>
</td></tr>
</table>

</td></tr>

<tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
</td></tr>
</table>
	   </div>
	   <br style="clear:both" />
	   <div id="footer">
	   2018 &copy; Antihovich.ru
	   
	   
	</body>
  </html>	
	