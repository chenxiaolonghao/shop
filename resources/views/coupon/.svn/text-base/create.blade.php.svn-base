@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')

	<div class="main animsition">
        <div class="container-fluid">

            <div class="row">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">新增优惠券</h3>
                        </div>
                        <div class="panel-body">
                        	<form class="form-horizontal" role="form" action="{{ url('good/coupon/create') }}" method="POST">
                                {{ csrf_field() }}
                                
                                @include('admin.partials.errors')
                            	@include('admin.partials.success')
                                	
								<div class="form-group">
									<label for="tag" class="col-md-3 control-label">打折</label>
									<div class="col-md-5">
									    <select id="discount" name="discount" type="text" class="form-control select2">
									        <option>9.8折</option>
									        <option>9.5折</option>
									        <option>9.0折</option>
									        <option>8.5折</option>
									    </select>
									</div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">优惠券描述</label>
								    <div class="col-md-5">
								        <textarea class="form-control" placeholder="请输入优惠券描述" name="miaoshu" id="miaoshu"></textarea>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">发布几张</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="num" id="num" value="" autofocus>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">有效期</label>
								    <div class="col-md-5">
								        <fieldset>
						                  <div class="control-group">
						                    <div class="controls">
						                    	<div class="input-prepend input-group">
						                       		<span class="add-on input-group-addon">
						                       			<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
						                       		</span>
						                       		<input type="text" readonly style="width: 250px" name="reservation" id="reservation" class="form-control" value="" /> 
						                     	</div>
						                    </div>
						                  </div>
						                </fieldset>
								    </div>
								</div>
								
								
								<div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary">发布</button>  
                                    </div>
                                </div>
								
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
@endsection


@section('js')

	<script>
		$('#reservation').daterangepicker(null, function(start, end, label) {
			
		});
	</script>

@endsection