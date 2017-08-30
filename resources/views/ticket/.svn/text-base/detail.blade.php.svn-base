@extends('admin.layouts.layerHead')

@section('content')

	
	<form class="form-horizontal" action="" role="form" method="POST" id="do_form" name="do_form">
		{{ csrf_field() }}
	
		<div class="form-group" style="display: none;">
			<label for="tag" class="col-md-3 control-label">ID</label>
			<div class="col-md-5">
				<input type="text" class="form-control required" name="idstr" value="{{$ticket->id}}" autofocus>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3">积分:</label>
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
			<label class="col-md-3">积分券类型:</label>
			<div class="col-md-5">
				<select name="jifen-type" type="text" class="form-control select2" disabled="true">
					<option>等级积分券</option>
				</select>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3">积分券描述:</label>
			<div class="col-md-5">
				<textarea class="form-control" placeholder="请输入积分券描述" name="miaoshu" id="miaoshu"></textarea>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3">开始日期：</label>
			<div class="col-md-5">
				<div class='input-group date' id='starttime'>
					<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
					<input type='text' name="starttime" class="form-control" />
				</div>
			</div>
		</div>
	
		<div class="form-group">
			<label class="col-md-3">结束日期：</label>
			<div class="col-md-5">
				<div class='input-group date' id='endtime'>
					<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
					<input type='text' name="endtime" class="form-control" />
				</div>
			</div>
		</div>
	
		<div class="form-group" style="text-align: center;">
			<div class="col-md-7 col-md-offset-3">
				<a href="javascript:void(0);" onclick="btnClick()" class="btn btn-primary btn-md">
					修改
				</a>
			</div>
		</div>
	
	</form>
	   
@endsection

@section('js')	
	<script type="text/javascript">
		
		
       	$('#starttime').datetimepicker({  
        	format: 'YYYY-MM-DD',  
        	locale: moment.locale('zh-cn')  
    	});  
    	
    	$('#endtime').datetimepicker({  
        	format: 'YYYY-MM-DD',  
        	locale: moment.locale('zh-cn')  
    	});  
    	
    	
    	function comparedate(a, b) {
    		
			var arr = a.split("-");
			var starttime = new Date(arr[0], arr[1], arr[2]);
			var starttimes = starttime.getTime();
			
			var arrs = b.split("-");
			var lktime = new Date(arrs[0], arrs[1], arrs[2]);
			var lktimes = lktime.getTime();
			
			if (starttimes > lktimes) {
				
				return false;
			}else{
				
				return true;	
			}
		}

    	
    	function btnClick()
    	{
    		var  frm = document.do_form;
    		var miaoshu = frm.miaoshu;
    		
    		var starttime = frm.starttime;
    		
    		var endtime = frm.endtime;
    		
    		if(miaoshu.value == ''){
    			
    			layer.open({
                     title: '错误信息',content: '请输入积分券描述'
                });
                
                return;
    		}
    		
    		if(starttime.value == ''){
    			
    			layer.open({
                     title: '错误信息',content: '请选择日期'
                });
                
                return;
    		}
    		
    		if(endtime.value == ''){
    			
    			layer.open({
                     title: '错误信息',content: '请选择日期'
                });
                
                return;
    		}
    		
    		if(!comparedate(starttime.value,endtime.value))
    		{
    			layer.open({
                     title: '错误信息',content: '开始日期大于结束日期'
                });
                
                return;
    		}
    		
    		
    		 $.ajax({
               
                type:'post',
                url:"{{ url('good/ticket/update') }}",
                dataType:'json',
                data:$('#do_form').serialize(),
                beforeSend:function(){
                    
                },
                success:function(result){
               
                    layer.msg(result.message);
                  	
                  	setTimeout(function() {
						parent.location.reload();
					},2000); 
                },
                error:function(error)
                {
                    layer.msg(result.message);
                }  
            });
    		
    	}
    	
    </script>
    
@endsection
	