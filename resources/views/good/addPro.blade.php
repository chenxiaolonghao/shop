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
                            <h3 class="panel-title">添加商品</h3>
                        </div>
                        <div class="panel-body">
							
							
                            <form class="form-horizontal" role="form" action="{{ url('good/index/addPro') }}" method="POST" id="do_form" name="do_form">
                                {{ csrf_field() }}

								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">名称</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="proname" id="proname" value="" placeholder="请输入商品名称" autofocus>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">描述</label>
								    <div class="col-md-5">
								        <textarea class="form-control" placeholder="请输入商品描述" name="prodes" id="prodes"></textarea>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">积分</label>
								    <div class="col-md-5" style="margin-top: 10px;">
								        <input type="text" class="form-control" name="exchange" id="exchange" value="" placeholder="请输入兑换积分" autofocus>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">图片</label>
								    <div class="col-md-5" style="margin-top: 10px;">
								        <input name="picture" type="file"/>
       										
								    </div>
								</div>
                                

                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>新增</button> 
                                        <!--<button style="margin-top: 15px;" class="btn btn-g" id="resetBtn">重置</button>-->  
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
		
		$('#do_form').bootstrapValidator({
　　　　　　message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                proname:{
                    validators: {
                        notEmpty: {
                            message: '请输入商品名称'
                        }
                    }
                },
                prodes: {
                    validators: {
                        notEmpty: {
                            message: '请输入商品描述'
                        }
                    }
                },
                exchange: {
                    validators: {
                        notEmpty: {
                            message: '请输入兑换积分'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: '只能是数字'
                        },
                    }
                },
                picture: {
                    validators: {
                        notEmpty: {
                            message: '请上传商品图片'
                        }
                    }
                }
            }
        });
        
        
        $('#do_form').ajaxForm({  
	        dataType: 'json',  
	        success: processJson
	    });  
	    function processJson(data){  
	    	$('#do_form').bootstrapValidator('disableSubmitButtons', false); 
            layer.msg(data.message); 
            
	    } 
	    
        
	</script>
	
@endsection