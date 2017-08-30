<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>用户登录</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">
  	
  <style>
  	body {
      color:#999;
      background:url("http://img.infinitynewtab.com/wallpaper/2709.jpg");
      background-size:cover;
    }
    
    a {
      color:#fff;
    }
    
    .login-screen {
      max-width:400px;
      padding:0;
      margin:100px auto 0 auto;
    }
   	.login-screen .well {
      border-radius: 3px;
      -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background: rgba(255,255,255, 0.2);
    }
    .login-screen .copyright {
      text-align: center;
    }
    @media(max-width:767px) {
      .login-screen {
        padding:0 20px;
      }
    }
    
    .profile-img-card {
      width: 100px;
      height: 100px;
      margin: 10px auto;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
    }
    .profile-name-card {
      text-align: center;
    }

    #login-form {
      margin-top:20px;
    }
    #login-form .input-group {
      margin-bottom:15px;
    }
  </style>

</head>
<body >
	
	
	<div class="container">
    	<div class="login-wrapper">
      		<div class="login-screen">
        		<div class="well">
        			<div class="login-form">
	        			<img id="profile-img" class="profile-img-card" src="{{url('/imgs/avatar/u1.jpg')}}" />
	            		<p id="profile-name" class="profile-name-card"></p>
	            
	            		<div class="login-logo">
					    	<a>修改密码</a>
					  	</div>
				  	
            			<form action="{{ url('/admin/resetpwd/setPassword') }}" method="post">
            				{!! csrf_field() !!}
            				<div id="errtips" class="hide"></div>
            	
            				<div class="input-group">
				                <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
				              	<input type="text" class="form-control"  placeholder="输入用户名" name="name" />
              				</div>
              
              
              				<div class="input-group" style="margin-top: 20px;">
				                <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
				                <input type="password" class="form-control" placeholder="密码" name="password" />
              				</div>
              				
              				
              				<div class="input-group" style="margin-top: 20px;">
				                <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
				                <input type="password" class="form-control" placeholder="再次输入密码" name="password_confirmation" />
              				</div>
              				
              				
              				<div style="margin-top: 20px;">
				                @include('admin.partials.errors')
                    			@include('admin.partials.success')
              				</div>
              
              
              				<div class="form-group" style="margin-top: 40px;">
                				<button type="submit" class="btn btn-success btn-lg btn-block">修改</button>
              				</div>
              
            			</form>
        			</div>
        		</div>
      		</div>
    	</div>
   </div>
                    

<script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
