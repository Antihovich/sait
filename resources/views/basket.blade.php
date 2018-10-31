	@extends('layouts.base')
		 @section('scripts')
		 @parent
		 <script src="{{asset('media/js/order.js')}}"> </script>
	 @endsection
	@section('content')
		
		<h2>Моя корзина</h2>
		
		<div class="maintext">
		<form method="get" action="{{asset('orderreg')}}">
		<table class="table table-bordered table-striped" width="100%">
		<tr> 
		   <th>Изображение</th>
		   <th>Название</th>
		   <th>Цена, руб.</th>
			<th>Количество</th>
			<th>Сумма</th>
			<th>Удаление</th>
	    </tr>  
		@php 
		  $counts = 0;
		  $itog = 0;
		 @endphp 
		@foreach ($arr as $key=>$value)
		
		@php
		
		  $count = $value * $products[$key]->price;
		  $counts++;
		  $itog +=$count;
		 @endphp 
		<tr>
		<td>
				  @if($products[$key]->picture)
			  <img  class="product" src="{{asset('uploads/thumb/'.$products[$key]->picture)}}"/>
		   @else
			   <img class="product" src="{{asset('media/img/no_photo.png')}}"/>
		   @endif
		</td>
		<td>
		
		{{$products[$key]->name}}

		</td>
		<td>
		<span id="price_{{$key}}">
				{{$products[$key]->price}}
						</span>
		</td>

		<td>
		<input type="number" name="{{$key}}" value="{{$value}}" min=0 data-id="{{$key}}" class="form-control count"/>
		
		</td>
		<td>
		<span id="count_{{$key}}">
			{{$count}}
		</span>	
		</td>
		<td>
		<a href="{{asset('basket/dell/'.$key)}}" data-id="{{$key}}">
		  &times;
		 </a> 
		</td>
		  </tr>  
		@endforeach
		<tr>
		 <td colspan=3>
		 итого </td>
		 <td>
		 {{$counts}}
		 </td>
		 <td>{{$itog}}</td>
		 <td>
		 <a href="{{asset('basket/clear')}}">Очистить всё</a>
		 </td>
        </table>		
		<div class="col-md-10"></div>
		<div class="col-md-2"> <button type="submit" class="btn btn-primary"> Перейти к оформлению заказа</button></div>
		
	   </form>
	   </div>
	 @endsection
	  