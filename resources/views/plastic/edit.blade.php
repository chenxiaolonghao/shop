@extends('admin.layouts.layerHead')

@section('content')
	
	
	<div class="main animsition">
        <div class="container-fluid">

            <div class="row">
                <div class="">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">修改</h3>
                        </div>
                        
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" action="{{url('plastic/index/update')}}" method="POST" id="do_form" name="do_form">
                                {{ csrf_field() }}

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">ID</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="id" id="id" value="{{$plastics->id}}" placeholder="ID" autofocus>
                                    </div>
                                </div>

          						<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">标题</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="title" id="title" value="{{$plastics->title}}" placeholder="请输入文章标题" autofocus>
								    </div>
								</div>

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">标题</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="title1" id="title1" value="{{$plastics->title}}" placeholder="请输入文章标题" autofocus>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label for="tag" class="col-md-3 control-label">内容简介</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="content_summary" id="content_summary" value="{{$plastics->content_summary}}" placeholder="请输入内容简介" autofocus>
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">内容简介</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="content_summary1" id="content_summary1" value="{{$plastics->content_summary}}" placeholder="请输入内容简介" autofocus>
                                    </div>
                                </div>

                                    <div class="form-group">
                                    <label for="tag" class="col-md-3 control-label">图片链接</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="imglink" id="imglink" value="{{$plastics->imglink}}" placeholder="请输入图片链接" autofocus>
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">图片链接</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="imglink1" id="imglink1" value="{{$plastics->imglink}}" placeholder="请输入图片链接" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tag" class="col-md-3 control-label">图片</label>
                                    <div class="col-md-5">
                                        <input name="pic" type="file" id="doc" onchange="setImagePreview();" />
                                        <img src="{{$plastics->pic}}" style="width: 50px;height:50px" id="preview">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button style="margin-top: 15px;" type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>修改</button>
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
                            message: '请输入文章标题'
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
				
				imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]); 
			}
		}
	</script>
@endsection