@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<a href="{{url('/good/coupon/create')}}" class="btn btn-success btn-md"><i class="fa fa-plus-circle"></i>新增优惠券</a>
	
	<div class="main animsition" style="margin-top: 10px;">
        <div class="container-fluid">

            <div class="row">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align: center;font-size: 25px;">优惠券列表</h3>
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
							        <th>打折</th>
							        <th>优惠券描述</th>
							        <th>有效期</th>
							        <th>操作</th>
							      </tr> 
							    </thead>
							    <tbody>
							    	@foreach($coupons as $v)
									<tr>
										<td>{{$v->id}}</td>
										<td>{{$v->discount}}折</td>
										<td>{{$v->describe}}</td>
										<td>{{$v->expirydate}}</td>
										<td>
											<!--<a style="margin:3px;" href="javascript:ticketDetail({{$v->id}});" class="X-Small btn-xs btn-primary"></i> 编辑</a>-->
											<a style="margin:3px;" href="javascript:btnDelete({{$v->id}});" class="X-Small btn-xs btn-danger">删除</a>
										</td>
									</tr>
									@endforeach
							    </tbody>
  							</table>
  							{{ $coupons->links() }}
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
                	url:"{{ url('good/coupon/delete') }}",
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
				title: '优惠券',
				maxmin: true,
				shadeClose: true,
				area : ['800px' , '520px'],
				content: "{{url('good/coupon/update')}}" + '/' + id
			});
		}

	</script>
@endsection