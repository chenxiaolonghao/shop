@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<a href="{{url('/good/cashcoupon/create')}}" class="btn btn-primary btn-md"><i class="fa fa-plus-circle"></i>新增代金券 </a>



	<div class="layui-form">
		<table class="layui-table" lay-even="" lay-skin="row">
		  	<colgroup>
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
		  	</colgroup>
		  	<thead>
			    <tr>
			    	<th>ID</th>
			      	<th>名称</th>
			      	<th>兑换积分</th>
			      	<th>描述</th>
			      	<th>数量</th>
			      	<th>图片</th>
			      	<th>操作</th>
			    </tr> 
		  	</thead>
		
			<tbody>
				@foreach($coupons as $v)
			    <tr>
			    	<td>{{$v->id}}</td>
				    <td>{{$v->cash_coupon_name}}</td>
				    <td>{{$v->exchange_integral}}</td>
				    <td>{{$v->describe}}</td>
				    <td>{{$v->number}}</td>
				    <td>
				    	<img style="width:100px;height:50px;" src="{{$v->pic}}">
				    </td>
				    <td>
				    	
				    </td>
			    </tr>
		  		@endforeach
		  	</tbody>
		</table>  
		
		{{ $coupons->links() }}

	</div>


@endsection


@section('js')

@endsection