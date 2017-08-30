@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<form class="layui-form" action="">
	 	<div class="layui-form-item">
		    <div class="layui-inline">
		      <label class="layui-form-label" style="width:100px;">输入昵称</label>
		      <div class="layui-input-inline">
		        <input type="tel" name="username" lay-verify="username" autocomplete="off" class="layui-input">
		      </div>
		      <button class="layui-btn">查询</button>
		    </div>
  		</div>
    </form>
	
	<div class="layui-form">
		<table class="layui-table" lay-even="" lay-skin="row">
		  	<colgroup>
			    <col width="150">
			    <col width="150">
			    <col width="150">
			    <col width="150">
		  	</colgroup>
		  	<thead>
		    <tr>
		    	<th>ID</th>
		      	<th>昵称</th>
		      	<th>积分</th>
		      	<!-- <th>操作</th> -->
		    </tr> 
		  	</thead>
		
			<tbody>
				@foreach($users as $user)
			    <tr>
			    	<td>{{$user->id}}</td>
				    <td>{{$user->nickname}}</td>
				    <td>{{$user->integral}}</td>
				   <!--  <td>
				    	<button type="button" onclick="btnClick({{$user->id}})" class="btn btn-primary">详情</button>
				    </td> -->
			    </tr>
		  		@endforeach
		  	</tbody>
		</table>  

		{{ $users->links() }}
	</div>

@endsection


@section('js')

	<script>
		function btnClick(id)
		{
			layer.open({
			  	type: 2,
				title: '详情',
				maxmin: true,
				shadeClose: true,
				area : ['800px' , '520px'],
				content: "{{url('/test/index/index')}}" + '/' + id
			});
		}
	</script>

@endsection