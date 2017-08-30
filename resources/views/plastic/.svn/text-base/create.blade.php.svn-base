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
                            <h3 class="panel-title">添加整形百科</h3>
                        </div>
                        <div class="panel-body">
							
							
							
                            <form class="form-horizontal" action="{{ url('plastic/index/create') }}" method="POST" id="do_form">
                                 {{ csrf_field() }}

								<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">题目</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="title" id="title" value="" placeholder="请输入整形百科题目" autofocus>
								    </div>
								</div>

                                <div class="form-group">
                                    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">内容简介</label>
                                    <div class="col-md-5" style="margin-top: 10px;">
                                        <input type="text" class="form-control" name="content_summary" id="content_summary" value="" placeholder="请输入内容简介" autofocus>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">图片链接</label>
                                    <div class="col-md-5" style="margin-top: 10px;">
                                        <input type="text" class="form-control" name="imglink" id="imglink" value="" placeholder="请输入图片链接" autofocus>
                                    </div>
                                </div>

								<div class="form-group">
								    <label for="tag" style="margin-top: 5px;" class="col-md-3 control-label">图片</label>
								    <div class="col-md-5" style="margin-top: 10px;">
								        <input name="pic" type="file" id="doc" onchange="setImagePreview();" /> 
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
				title:{
					validators: {
						notEmpty: {
							message: '请输入整形百科题目'
						}
					}
				},
				content_summary:{
					validators: {
						notEmpty: {
							message: '请输入内容简介'
						}
					}
				},
				pic: {
					validators: {
						notEmpty: {
							message: '请上传项目图片'
						}
					}
				},
				imglink: {
					validators: {
						notEmpty: {
							message: '请输入图片链接'
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