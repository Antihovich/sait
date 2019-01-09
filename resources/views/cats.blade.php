	@extends('layouts.base')
	@section('content')
	@section('scripts') 
    @parent
    @endsection
	<script src="{{asset('js/modal.js')}}"></script>
		
		<h2 class="">Категории</h2>
		
		<div class="maintext">
		@foreach($cats as $cat)
		<h2> {{$cat->name}}</h2>
		<div>
		{!! $cat->body!!}
		</div>
		@foreach($cat->products()->get() as $one)
		  <hr/>
		  @if($one->picture)
			  <img  class="product" src="{{asset('uploads/thumb/'.$one->picture)}}" id="{{$one->id}}"/>
		   @else
			   <img class="product" src="{{asset('media/img/no_photo.png')}}" id="{{$one->id}}"/>
		   @endif
		   <h3>
		   <a href='#' class="product_link">
		   {{$one->name}}
		   </a>
		   		   <a href="{{asset('basket/add/'.$one->id)}}" class="product_link">
		   Добавить в корзину
		   </a>
		   </h3>
		   {!!$one->body!!}
		  
		  
		    @endforeach
			     @endforeach
		</div>
	 @endsection
	  
	  