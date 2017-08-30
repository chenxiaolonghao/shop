  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">TMOV</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">TMOV</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
			
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa dizhi"></i>
            </a>
      		</li>
      
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('/imgs/tong.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{auth()->user()->nickname}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{url('/imgs/tong.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{auth()->user()->name}} - 系统管理员
                  <small>最后登录:{{date('Y-m-d H:i',strtotime(auth()->user()->updated_at))}}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="{{url('/system/index/setMyProfile')}}" class="btn btn-default btn-flat">个人资料</a>
                </div>-->
                <div class="pull-right">
                  <a href="{{url('/admin/logout')}}" class="btn btn-default btn-flat">登出</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  
 
  <script>
  	 
		$.getScript('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js', function(_result) {  	
	    if (remote_ip_info.ret == '1') {
					
						$('.dizhi').text(remote_ip_info.city);
	    } else {
	    }
	  });
      
  </script>