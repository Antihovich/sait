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
		    @foreach ($all as $one) 
				<tr>
					 <td> {{ $one -> fio}} </td>
					 <td> {{ $one -> email}} </td>
					 <td> {{ $one -> phone}} </td>
					 <td> {{ $one -> status}} </td>
					 <td> {{ $one -> order}} </td>
					 <td> <span> 
					 <a href ="{{asset('admin/order/one/ ',$one->id)}}>
					 {{count(unserialize( $one->body))}}" </span> </td>
				 </tr>
			  @endforeach
			  </table>
        </div> 
	</div>

@endsection