@extends('admin.layouts.base')
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
                            <h3 class="panel-title">添加项目</h3>
                        </div>
                        <div class="panel-body">
							
							
							
                            <form class="form-horizontal" action="{{ url('project/index/create') }}" method="POST" id="do_form">
                                 {{ csrf_field() }}

								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">项目名称</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="pro_name" id="pro_name" value="" placeholder="请输入产品名称" autofocus>
								    </div>
								</div>

                                <div class="form-group">
                                    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">类型</label>
                                    <div class="col-md-5" style="margin-top: 10px;">
                                        <input type="text" class="form-control" name="type" id="type" value="" placeholder="请输入产品类型" autofocus>
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
                                    <div class="col-md-7 col-md-offset-3">
                                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>新增</button>  
                                        <!-- <button style="margin-top: 15px;" class="btn btn-g" id="resetBtn">重置</button> -->
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
				pro_name:{
					validators: {
						notEmpty: {
							message: '请输入产品名称'
						}
					}
				},
				picture: {
					validators: {
						notEmpty: {
							message: '请上传产品图片'
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