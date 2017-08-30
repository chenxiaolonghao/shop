<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('/validator/bootstrapValidator.css')}}">
  
  <link rel="stylesheet" href="{{asset('/layui/css/layui.css')}}">

</head>

<body>


		<div class="wrapper" style="margin-left: 20%;margin-right: 20%;">
			<form class="form-horizontal" role="form" method="POST" id="do_form" name="do_form">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="tag" class="col-md-3 control-label">昵称</label>
					<div class="col-md-5" style="margin-top: 10px;">
						<input type="text" class="form-control" name="appid" id="tag" value="{{$user->username}}" disabled="true">
					</div>
				</div>

				<div class="form-group">
					<label for="tag" class="col-md-3 control-label">积分</label>
					<div class="col-md-5" style="margin-top: 10px;">
						<input type="text" class="form-control" name="appid" id="tag" value="{{$user->integral}}" disabled="true">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tag" class="col-md-3 control-label">会员级别</label>
					<div class="col-md-5" style="margin-top: 10px;">
						<input type="text" class="form-control" name="appid" id="tag" value="普通会员" disabled="true">
					</div>
				</div>
				
				@if($detail)
				<div class="form-group">
					<label for="tag" class="col-md-3 control-label">星座</label>
					<div class="col-md-5" style="margin-top: 10px;">
						<input type="text" class="form-control" name="appid" id="tag" value="{{$detail->constellation}}" disabled="true">
					</div>
				</div>
				
				<div class="form-group">
					<label for="tag" class="col-md-3 control-label">学历</label>
					<div class="col-md-5" style="margin-top: 10px;">
						<input type="text" class="form-control" name="appid" id="tag" value="{{$detail->education}}" disabled="true">
					</div>
				</div>
				@endif

			</form>
		</div>
		
		
	<script src="{{asset('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
	<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/layer/layer.js')}}"></script>	
	<script src="{{asset('/validator/bootstrapValidator.js')}}"></script> 
	<script src="{{asset('/dist/js/jquery-form.js')}}"></script>

</body>
</html>

