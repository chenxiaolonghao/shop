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

                            <form class="form-horizontal" role="form" action="{{url('appointment/index/update')}}" method="POST" id="do_form" name="do_form">
                                {{ csrf_field() }}

                                <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">ID</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="id" id="id" value="{{$appointments->id}}" placeholder="ID" autofocus>
                                    </div>
                                </div>
<!-- 
          						<div class="form-group"> 
								    <label for="tag" class="col-md-3 control-label">预约时间</label>
								    <div class="col-md-5">
								        <input type="text" class="form-control required" name="appointmenttime" id="appointmenttime"  value="{{$appointments->appointmenttime}}" placeholder="请输入预约时间" autofocus>
								    </div>
								</div> -->

                           <!--      <div class="form-group" style="display: none;">
                                    <label for="tag" class="col-md-3 control-label">预约时间</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control required" name="appointmenttime1" id="appointmenttime1" value="{{$appointments->appointmenttime}}" placeholder="请输入预约时间" autofocus>
                                    </div>
                                </div> -->

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
                appointmenttime:{
                    validators: {
                        notEmpty: {
                            message: '请输入要修改的预约时间'
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
				
				imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]); 
			}
		}
	</script>
@endsection