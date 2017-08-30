<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>用户登录</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo e(asset('/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/libs/font-awesome/4.5.0/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/libs/ionicons/2.0.1/css/ionicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/AdminLTE.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/iCheck/square/blue.css')); ?>">
  	
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
        		<img id="profile-img" class="profile-img-card" src="<?php echo e('../imgs/avatar/u1.jpg'); ?>" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <div class="login-logo">
				    	<a>后台登录</a>
				  	</div>
            <form action="<?php echo e(url('/admin/login')); ?>" method="post">
            	<?php echo csrf_field(); ?>

            	<div id="errtips" class="hide"></div>
            	
            	<div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
              	<input type="text" class="form-control"  placeholder="输入用户名" name="name" value="<?php echo e(old('name')); ?>" />
              </div>
              
              
              <div class="input-group" style="margin-top: 20px;">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                <input type="password" class="form-control" placeholder="密码" name="password" />
              </div>
              
              
              <div class="form-group" style="margin-top: 40px;">
                <button type="submit" class="btn btn-success btn-lg btn-block">登录</button>
              </div>
              
              
              <div class="row">
				        <div class="col-xs-4">
				          <a href="<?php echo e(url('/admin/resetpwd/index')); ?>">忘记密码?</a>
				        </div>
				      </div>
              
            </form>
        	</div>
        </div>
      </div>
    </div>
  </div>
                    	
<!--<div class="login-box">
  <div class="login-logo">
    <a>后台登录</a>
  </div>
  
  <div class="login-box-body">
    <p class="login-box-msg">管理员</p>

    <form action="<?php echo e(url('/admin/login')); ?>" method="post">
    	
			<?php echo csrf_field(); ?>

      <div class="form-group has-feedback">
        <input  class="form-control" placeholder="输入用户名"  name="name" value="<?php echo e(old('name')); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  name="password" placeholder="密码">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
        </div>
      </div>
    </form>

  </div>
</div>-->


<script src="<?php echo e(asset('/plugins/jQuery/jQuery-2.2.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/iCheck/icheck.min.js')); ?>"></script>
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
