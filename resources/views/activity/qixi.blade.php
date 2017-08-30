@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	
	<div class="layui-form">
		<table class="layui-table" lay-even="" lay-skin="row">
		  	<colgroup>
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
		  	</colgroup>
		  	<thead>
		    <tr>
		    	<th>ID</th>
		      	<th>姓名</th>
		      	<th>成绩</th>
		      	<th>项目</th>
		      	<th>手机号</th>
		      	
		    </tr> 
		  	</thead>
		
			<tbody>
				@foreach($qixi as $v)
			    <tr>
			    	<td>{{$v->id}}</td>
				    <td>{{$v->username}}</td>
				    <td>{{$v->bushu}}</td>
				    <td>{{$v->project}}</td>
				    <td>{{$v->phonenum}}</td>
				   
			    </tr>
		  		@endforeach
		  	</tbody>
		</table>  

		{{ $qixi->links() }}
	</div>
	

@endsection


@section('js')



@endsection