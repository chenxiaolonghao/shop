@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<a href="{{url('/good/ticket/create')}}" class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i>新增积分券</a>
	
	<div class="main animsition" style="margin-top: 10px;">
        <div class="container-fluid">

            <div class="row">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align: center;font-size: 25px;">积分券列表</h3>
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
							        <th>积分</th>
							        <th>积分券描述</th>
							        <th>有效期</th>
							        <th>操作</th>
							      </tr> 
							    </thead>
							    <tbody>
							    	@foreach($tickets as $v)
									<tr>
										<td>{{$v->id}}</td>
										<td>{{$v->integral}}</td>
										<td>{{$v->describe}}</td>
										<td>{{$v->validity_period}}</td>
										<td>
											<a style="margin:3px;" href="javascript:ticketDetail({{$v->id}});" class="X-Small btn-xs btn-primary"></i> 编辑</a>
											<a style="margin:3px;" href="javascript:btnDelete({{$v->id}});" class="X-Small btn-xs btn-danger">删除</a>
										</td>
									</tr>
									@endforeach
							    </tbody>
  							</table>
  							{{ $tickets->links() }}
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
			layer.confirm('确定要删除此积分券？', {
  				btn: ['删除','取消']
			}, function(){
  				
  				$.ajax({
	                headers: {
	                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	                },
                	type:'get',
                	url:"{{ url('good/ticket/delete') }}",
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
				title: '积分券',
				maxmin: true,
				shadeClose: true,
				area : ['800px' , '520px'],
				content: "{{url('good/ticket/detail')}}" + '/' + id
			});
		}
	</script>

@endsection