
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>管理后台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="_token" id="csrf" content="<?php echo e(csrf_token()); ?>"/>
  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo e(asset('/bootstrap/css/bootstrap.min.css')); ?>">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/libs/font-awesome/4.5.0/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('/libs/ionicons/2.0.1/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/AdminLTE.min.css')); ?>">
  
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/skins/skin-blue.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('/validator/bootstrapValidator.css')); ?>">

  
  <link rel="stylesheet" href="<?php echo e(asset('/layui/css/layui.css')); ?>">

 
  <link href="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet">

  <?php /*loding*/ ?>
  <link href="<?php echo e(asset('/dist/css/load/load.css')); ?>" rel="stylesheet">
  	
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/daterangepicker/daterangepicker-bs3.css')); ?>"/>
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/datepicker/datepicker3.css')); ?>"/>
  
  
  <!-- jQuery 2.2.0 -->
	<script src="<?php echo e(asset('/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo e(asset('/bootstrap/js/bootstrap.min.js')); ?>"></script>
	
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('/dist/js/app.min.js')); ?>"></script>
	
	<!-- dataTables -->
	<script src="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('/dist/js/common.js')); ?>"></script>
		 
	<script src="<?php echo e(asset('/layui/layui.js')); ?>"></script>
	<script src="<?php echo e(asset('/layer/layer.js')); ?>"></script>	
	
	<script src="<?php echo e(asset('/validator/bootstrapValidator.js')); ?>"></script> 
	
	<script src="<?php echo e(asset('/dist/js/jquery-form.js')); ?>"></script>
	
	
	<script src="<?php echo e(asset('/plugins/daterangepicker/moment.js')); ?>"></script> 
	<script src="<?php echo e(asset('/plugins/daterangepicker/daterangepicker.js')); ?>"></script> 
	
	<script src="<?php echo e(asset('/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script> 
	<script src="<?php echo e(asset('/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js')); ?>"></script> 
	
	<script src="<?php echo e(asset('/vue/vue.js')); ?>"></script>
	<script src="<?php echo e(asset('/vue/vue-resource.js')); ?>"></script>
	<script src="<?php echo e(asset('/vue/vue-router.js')); ?>"></script>
	
	<script src="<?php echo e(asset('/js/Sortable.js')); ?>"></script>

	
  
  <script>
  	
  	Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=_token]').getAttribute('content');
  	
  	function htmlspecialchars_decode(str) {

			str = str.replace(/&amp;/g, '&');
			str = str.replace(/&lt;/g, '<');
			str = str.replace(/&gt;/g, '>');
			str = str.replace(/&quot;/g, "''");
			str = str.replace(/&#039;/g, "'");

			return str;
		}
	</script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_four"></div>
      <div class="object" id="object_three"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_one"></div>
    </div>
  </div>
</div>
<div class="wrapper">

  <!-- Main Header -->
  <?php echo $__env->make('admin.layouts.mainHeader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make('admin.layouts.mainSidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php /*<h1>
        <?php echo $__env->yieldContent('pageHeader'); ?>
        <small><?php echo $__env->yieldContent('pageDesc'); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> 控制面板</a></li>
        <li class="active">Here</li>
      </ol>*/ ?>
      <h6>
      <?php echo Breadcrumbs::render(Route::currentRouteName()); ?>

      </h6>
    </section>

    <!-- Main content -->
    <section class="content" style="border-top:1px solid #C4C4C4;">

	  <?php echo $__env->yieldContent('content'); ?>

    </section>
  </div>
  
</div>


<?php echo $__env->yieldContent('js'); ?>


</body>
</html>
