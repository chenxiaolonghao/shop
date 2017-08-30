@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<a href="{{url('/project/index/create')}}" class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i>新增项目</a>

	<div class="main animsition" style="margin-top: 10px;">
		<div class="container-fluid">

			<div class="row">
				<div class="">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style="text-align: center;font-size: 25px;">项目列表</h3>
						</div>

						@include('admin.partials.errors')
						@include('admin.partials.success')

						<div class="layui-form" style="margin-left: 10px;margin-right: 10px;">
							<table class="layui-table">
								<colgroup>
									<col width="50">
									<col width="150">
									<col width="150">
									<col width="150">
									<col width="200">
									<col>
								</colgroup>
								<thead>
								<tr>
									<th>id</th>
									<th>项目名称</th>
									<th>类型</th>
									<th>图片</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								@foreach($gifts as $v)
									<tr>
										<td>{{$v->id}}</td>
										{{--<td>{{$v->pro_id}}</td>--}}
										<td>{{$v->pro_name}}</td>
										<td>{{$v->type}}</td>
										<td><img src="{{$v->pro_pic}}" style="width: 100px;height: 50px"></td>
										<td>
											<a style="margin:3px;" href="javascript:ticketDetail({{$v->id}});" class="X-Small btn-xs btn-primary"></i> 编辑</a>
											<a style="margin:3px;" href="javascript:btnDelete({{$v->id}});" class="X-Small btn-xs btn-danger">删除</a>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							{{ $gifts->links() }}
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection


@section('js')

	<script>
		function btnDelete(id)
		{
			layer.confirm('确定要删除此优惠券？', {
				btn: ['删除','取消']
			}, function(){

				$.ajax({
					type:'get',
					url:"{{ url('project/index/delete') }}",
					dataType:'json',
					data:{
						idstr:id
					},
					beforeSend:function(){

					},
					success:function(result){

						location.reload();
						layer.msg(result.message);
					},
					error:function(data)
					{
						layer.msg(data.message);
					}
				});

			}, function(){

			});
		}

		function ticketDetail(id)
		{
			layer.open({
				type: 2,
				title: '项目',
				maxmin: true,
				shadeClose: true,
				area : ['800px' , '520px'],
				content: "{{url('project/index/edit')}}" + '/' + id +'',
			});
		}

	</script>
@endsection