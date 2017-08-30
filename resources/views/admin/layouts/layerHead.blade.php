
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">

	<link rel="stylesheet" href="{{asset('/validator/bootstrapValidator.css')}}">
	<link rel="stylesheet" href="{{asset('/layui/css/layui.css')}}">
	
	<link rel="stylesheet" href="{{asset('/plugins/datepicker/bootstrap-datetimepicker.css')}}"/>

</head>

<body>
	
	<div class="wrapper" style="width: 50%;margin-left: 25%;">
	    <section class="content">
	    @yield('content')
	    </section>
	</div>
	
	
	<script src="{{asset('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
	<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/layer/layer.js')}}"></script>	
	<script src="{{asset('/dist/js/jquery-form.js')}}"></script>
	
	<script src="{{asset('/plugins/datepicker/moment-with-locales.js')}}"></script>
	<script src="{{asset('/plugins/datepicker/bootstrap-datetimepicker.js')}}"></script> 
	
	<script src="{{asset('/validator/bootstrapValidator.js')}}"></script> 
	
	<script src="{{asset('/dist/js/jquery-form.js')}}"></script>
	
	@yield('js')
	
</body>
</html>