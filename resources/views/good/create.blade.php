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
                            <h3 class="panel-title">新增代金券</h3>
                        </div>
                        <div class="panel-body">
							
							
							
                            <form class="form-horizontal" action="{{ url('good/cashcoupon/create') }}" method="POST" id="do_form">
                                {{ csrf_field() }}
                                
                                <div class="form-group">
								    <label for="tag" class="col-md-3 control-label">名称</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="couponname" id="couponname" value="" placeholder="请输入代金券名称" autofocus>
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">描述</label>
								    <div class="col-md-5">
								        <textarea class="form-control" placeholder="请输入代金券描述" name="miaoshu" id="miaoshu"></textarea>
								    </div>
								</div>
								
								<div class="form-group">
									   
									<label for="tag" class="col-md-3 control-label">兑换积分</label>
									<div class="col-md-5">
									    <select id="jifen" name="jifen" type="text" class="form-control select2" placeholder="积分">
									        <option>1000</option>
									        <option>1500</option>
									        <option>2000</option>
									        <option>2500</option>
									        <option>3000</option>
									    </select>
									</div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">图片</label>
								    <div class="col-md-5" style="margin-top: 10px;">
								        <input name="picture" type="file" id="doc" onchange="setImagePreview();" /> 
								        <!--<input name='picture[]' type="file" multiple>-->
		      							<img style="margin-top: 10px;" id="preview"/>
       	
								    </div>
								</div>
								
								
								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">发布几张</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="num" id="num" value="" autofocus>
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
					                  
		$('#do_form').bootstrapValidator({
　　　　　　 message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                couponname:{
                    validators: {
                        notEmpty: {
                            message: '请输入代金券 名称'
                        }
                    }
                },
                miaoshu: {
                    validators: {
                        notEmpty: {
                            message: '请输入代金券描述'
                        }
                    }
                },
                num: {
                    validators: {
                        notEmpty: {
                            message: '请输入张数'
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

		//下面用于图片上传预览功能
		function setImagePreview() {

			var docObj=document.getElementById("doc");
			var imgObjPreview=document.getElementById("preview");

			if (docObj.files && docObj.files[0]){

				imgObjPreview.style.width = "100px";
				imgObjPreview.style.height = "60px";

				imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]); 
			}
		}

	</script>
@endsection