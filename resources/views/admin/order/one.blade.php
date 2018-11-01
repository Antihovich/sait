@extends('admin.layouts.master')

@section('content')

    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-customView_index-list') }}</div>
        </div>
        <div class="portlet-body">
           <table width="100%" class="table  table bordered  table-striped">
		    <tr>
			   <th> ФИО</th>
			   <th> e-mail</th>
			   <th> телефон</th>
			   <th> статус</th>
			   <th>Заказ </th>
			   <th> Действие</th>
			 </tr>
 
				<tr>
					 <td> {{ $obj -> fio}} </td>
					 <td> {{ $obj -> email}} </td>
					 <td> {{ $obj -> phone}} </td>
					 <td> {{ $obj -> status}} </td>
					 <td> {{ $obj -> order}} </td>
					 <td> {{ $obj -> act }} </td>
					 <td> <span> {{count(unserialize( $one->body))}} </span> </td>
				 </tr>
				@php
                   $arr = inserialize($obj->body);
                @endphp
                @foreach($arr as $key => $value)
				товар: {{$key}},
                количество: {{$value}} <hr/>		
                endforeach				
 
			  </table>
        </div> 
	</div>

@endsection