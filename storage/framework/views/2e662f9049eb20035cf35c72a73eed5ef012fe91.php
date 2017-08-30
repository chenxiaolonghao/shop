<?php $__env->startSection('title','控制面板'); ?>

<?php $__env->startSection('pageHeader','控制面板'); ?>

<?php $__env->startSection('pageDesc','DashBoard'); ?>

<?php $__env->startSection('content'); ?>

	<style type="text/css">
	    .sm-st {
	        background:#fff;
	        padding:20px;
	        -webkit-border-radius:3px;
	        -moz-border-radius:3px;
	        border-radius:3px;
	        margin-bottom:20px;
	        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
	        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
	    }
	    .sm-st-icon {
	        width:60px;
	        height:60px;
	        display:inline-block;
	        line-height:60px;
	        text-align:center;
	        font-size:30px;
	        background:#eee;
	        -webkit-border-radius:5px;
	        -moz-border-radius:5px;
	        border-radius:5px;
	        float:left;
	        margin-right:10px;
	        color:#fff;
	    }
	    .sm-st-info {
	        font-size:12px;
	        padding-top:2px;
	    }
	    .sm-st-info span {
	        display:block;
	        font-size:24px;
	        font-weight:600;
	    }
	    .orange {
	        background:#fa8564 !important;
	    }
	    .tar {
	        background:#45cf95 !important;
	    }
	    .sm-st .green {
	        background:#86ba41 !important;
	    }
	    .pink {
	        background:#AC75F0 !important;
	    }
	    .yellow-b {
	        background: #fdd752 !important;
	    }
	    .stat-elem {
	
	        background-color: #fff;
	        padding: 18px;
	        border-radius: 40px;
	
	    }
	
	    .stat-info {
	        text-align: center;
	        background-color:#fff;
	        border-radius: 5px;
	        margin-top: -5px;
	        padding: 8px;
	        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
	        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
	        font-style: italic;
	    }
	
	    .stat-icon {
	        text-align: center;
	        margin-bottom: 5px;
	    }
	
	    .st-red {
	        background-color: #F05050;
	    }
	    .st-green {
	        background-color: #27C24C;
	    }
	    .st-violet {
	        background-color: #7266ba;
	    }
	    .st-blue {
	        background-color: #23b7e5;
	    }
	
	    .stats .stat-icon {
	        color: #28bb9c;
	        display: inline-block;
	        font-size: 26px;
	        text-align: center;
	        vertical-align: middle;
	        width: 50px;
	        float:left;
	    }
	
	    .stat {
	        white-space: nowrap;
	        overflow: hidden;
	        text-overflow: ellipsis;
	        display: inline-block;
	        margin-right: 10px; }
	    .stat .value {
	        font-size: 20px;
	        line-height: 24px;
	        overflow: hidden;
	        text-overflow: ellipsis;
	        font-weight: 500; }
	    .stat .name {
	        overflow: hidden;
	        text-overflow: ellipsis; }
	    .stat.lg .value {
	        font-size: 26px;
	        line-height: 28px; }
	    .stat.lg .name {
	        font-size: 16px; }
	    .stat-col .progress {height:2px;}
	    .stat-col .progress-bar {line-height:2px;height:2px;}
	
	    .item {
	        padding:30px 0;
	    }
	</style>
    
    <!--欢迎登陆管理后台-->
    
    <div class="panel panel-default panel-intro">
	    <div class="panel-heading">
	        <div class="panel-lead"><em>控制台</em>用于展示当前系统中的统计数据、统计报表及重要实时数据</div>
	    </div>
	    
	    <div class="panel-body">
        	<div id="myTabContent" class="tab-content">
            	<div class="tab-pane fade active in" id="one">

                	<div class="row">
                		<div class="col-sm-3 col-xs-6">
                        	<div class="sm-st clearfix">
                            	<span class="sm-st-icon st-red"><i class="fa fa-users"></i></span>
                            	<div class="sm-st-info">
                                	<span><?php echo e($total); ?></span>
                                	总会员数
                            	</div>
                        	</div>
                    	</div>
                    	
	                    
	                    <div class="col-sm-3 col-xs-6">
	                        <div class="sm-st clearfix">
	                            <span class="sm-st-icon st-blue"><i class="fa fa-shopping-bag"></i></span>
	                            <div class="sm-st-info">
	                                <span>0</span>
	                                	总订单数
	                            </div>
	                        </div>
	                    </div>
	               
                	</div>
                	
                	
                	<div class="row">
	                 
	                    <div class="col-lg-4">
                        	<div class="card sameheight-item stats">
                        		<div class="card-block">
                                	<div class="row row-sm stats-container">
                                		
                                		<div class="col-xs-6 stat-col">
	                                        <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
	                                        <div class="stat">
	                                            <div class="value"><?php echo e($num); ?></div>
	                                            <div class="name"> 今日注册 </div>
	                                        </div>
	                                        <div class="progress">
	                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
	                                        </div>
	                                    </div>
	                                    
	                                    <div class="col-xs-6  stat-col">
	                                        <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
	                                        <div class="stat">
	                                            <div class="value">55</div>
	                                            <div class="name"> 今日订单 </div>
	                                        </div>
	                                        <div class="progress">
	                                            <div class="progress-bar progress-bar-success" style="width: 20%"></div>
	                                        </div>
	                                    </div>
                                    
                                	</div>
                                </div>
                        	</div>
                        </div>
	                </div>
	                
	                
	                <div class="row" style="margin-top:15px;">
	                	<div class="col-lg-12">
	                        <h4>详细统计</h4>
	                    </div>
	                    <div class="col-xs-6 col-md-3">
	                        <div class="panel bg-blue">
	                            <div class="panel-body">
	                                <div class="panel-title">
	                                    <h5>评论统计</h5>
	                                </div>
	                                <div class="panel-content">
	                                    <h1 class="no-margins">1234</h1>
	                                    <div class="stat-percent font-bold text-gray"><i class="fa fa-commenting"></i> 1234</div>
	                                    <small>总评论数</small>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	               	</div>
                    
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>