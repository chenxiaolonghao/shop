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

                            <form class="form-horizontal" role="form" action="{{url('project/index/update')}}" method="POST" id="do_form" name="do_form">
                                {{ csrf_field() }}

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">ID</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="id" id="id" value="{{$gift->id}}" placeholder="ID" autofocus>
                                    </div>
                                </div>

          						<div class="form-group">
								    <label for="tag" class="col-md-3 control-label">产品名称</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="pro_name" id="pro_name" value="{{$gift->pro_name}}" placeholder="请输入产品名称" autofocus>
								    </div>
								</div>

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">产品名称</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="pro_name1" id="pro_name1" value="{{$gift->pro_name}}" placeholder="请输入产品名称" autofocus>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label for="tag" class="col-md-3 control-label">类型</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="type" id="type" value="{{$gift->type}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">类型</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="type1" id="type1" value="{{$gift->type}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tag" class="col-md-3 control-label">图片</label>
                                    <div class="col-md-5">
                                        <input name="pro_pic" type="file" id="doc" onchange="setImagePreview();" />
                                        <img src="{{$gift->pro_pic}}" style="width: 50px;height:50px" id="preview">
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
                proname:{
                    validators: {
                        notEmpty: {
                            message: '产品名称'
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