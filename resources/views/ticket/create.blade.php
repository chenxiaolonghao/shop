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
                            <h3 class="panel-title">新增积分券</h3>
                        </div>
                        <div class="panel-body">
							
							@include('admin.partials.errors')
                            @include('admin.partials.success')

                            <form class="form-horizontal" role="form" method="POST" action="{{url('good/ticket/create')}}" id="do_form" name="do_form">
                            	
                                {{ csrf_field() }}
                                
                                <div class="form-group">   
									<label class="col-md-3 control-label">积分券类型</label>
									<div class="col-md-5">
									    <select name="jifen-type" type="text" class="form-control select2">
									        <option>等级积分券</option>
									    </select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">积分</label>
									<div class="col-md-5">
									    <select  name="jifen" type="text" class="form-control select2">
									        <option>100</option>
									        <option>150</option>
									        <option>200</option>
									        <option>250</option>
									        <option>300</option>
									    </select>
									</div>
								</div>
								
								
								<div class="form-group">   
									<label class="col-md-3 control-label">积分券描述</label>
									<div class="col-md-5">
									    <textarea class="form-control" placeholder="请输入积分券描述" name="miaoshu" id="miaoshu"></textarea>
									</div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">日期</label>
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
                                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>新增</button>  
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