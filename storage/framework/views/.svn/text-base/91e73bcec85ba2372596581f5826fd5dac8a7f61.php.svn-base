<?php $__env->startSection('title','控制面板'); ?>

<?php $__env->startSection('pageHeader','控制面板'); ?>

<?php $__env->startSection('pageDesc','DashBoard'); ?>

<?php $__env->startSection('content'); ?>
	
	
	<style>
		
		
		.weixin-menu-setting{
		    margin:0;
		    margin-bottom:10px;
		    width:100%;
		}
		.mobile-head-title{
		    color: #fff;
		    text-align: center;
		    padding-top: 33px;
		    font-size: 15px;
		    width: auto;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    word-wrap: normal;
		    margin: 0 40px 0 70px;
		}
		.weixin-body {
		    padding:0;
		    margin:0;
		    margin-left:337px;
		}
		.weixin-content,.no-weixin-content{
		    background-color: #f4f5f9;
		    border: 1px solid #e7e7eb;
		    padding:15px;
		}
		.no-weixin-content{
		    border:#fff;
		    background-color: #fff;
		    vertical-align: middle;
		    padding-top:200px;
		    text-align: center;
		}
		@media (max-width: 720px) {
		    .weixin-body {
		        margin-left:0;
		        margin-top:560px;
		    }
		}
		.weixin-menu-title{
		    border-bottom: 1px solid #e7e7eb;
		    font-size: 16px;
		    padding: 0 20px;
		    line-height: 55px;
		    margin-bottom: 20px;
		}

		.mobile-menu-preview{
		    display:block;
		    float:left;
		    position:relative;
		    width: 317px;
		    height: 550px;
		    background: transparent url(../../../imgs/wx_mobile_header_bg.png) no-repeat 0 0;
		    background-position: 0 0;
		    border: 1px solid #e7e7eb;
		}

		.mobile-menu-preview .menu-list {
		    position: absolute;
		    height:50px;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    border-top: 1px solid #e7e7eb;
		    background: transparent url(../../../imgs/wx_mobile_footer_bg.png) no-repeat 0 0;
		    background-position: 0 0;
		    background-repeat: no-repeat;
		    padding-left: 43px;
		    margin:0;
		}
		
		.menu-list .menu-item,.menu-list .add-item{
		    line-height: 50px;
		    position: relative;
		    float: left;
		    text-align: center;
		    width: 33.33%;
		    list-style: none;
		}
		.ui-sortable-placeholder{
		    background-color:#fff;
		}
		.menu-item a,.add-item a{
		    display: block;
		    width: auto;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    word-wrap: normal;
		    color: #616161;
		    text-decoration: none;
		}
		.menu-item.current a.menu-link{
		    border: 1px solid #44b549;
		    line-height: 48px;
		    background-color: #fff;
		    color: #44b549;
		}
		.menu-item .icon-menu-dot{
		    background: url(../../../imgs/wx_mobile_index.png) 0 0 no-repeat;
		    width: 7px;
		    height: 7px;
		    vertical-align: middle;
		    display: inline-block;
		    margin-right: 2px;
		    margin-top: -2px;
		    bottom: 60px;
		    background-color: #fafafa;
		    border-top-width: 0;
		}
		.menu-item .menu-link,.add-item .menu-link{
		    border-left-width: 0;
		    border-left: 1px solid #e7e7eb;
		    text-align: center;
		}
		
		.sub-menu-item a,.add-sub-item a{
		    border: 1px solid #d0d0d0;
		    position:relative;
		    padding:0 0.5em;
		}
		.sub-menu-item.current a{
		    border: 1px solid #44b549;
		    background-color: #fff;
		    color: #44b549;
		    z-index: 1;
		}
		.sub-menu-list li a:hover{
		    background:#f1f1f1;
		}
		.menu-item.current .menu-link{
		    border: 1px solid #44b549;
		    line-height: 48px;
		    background-color: #fff;
		    color: #44b549;
		}
		.sub-menu-box{
		    position: absolute;
		    bottom: 60px;
		    left: 0;
		    width: 100%;
		    background-color: #fff;
		    border-top: none;
		}
		.sub-menu-list{
		    line-height: 50px;
		    margin:0;padding:0;
		}
		.sub-menu-list li{
		    line-height: 44px;
		    margin: -1px -1px 0;
		    list-style: none;
		}
		.sub-menu-box .arrow {
		    position: absolute;
		    left: 50%;
		    margin-left: -6px;
		}
		
		.sub-menu-box .arrow-in {
		    bottom: -5px;
		    display: inline-block;
		    width: 0;
		    height: 0;
		    border-width: 6px;
		    border-style: dashed;
		    border-color: transparent;
		    border-bottom-width: 0;
		    border-top-color: #fafafa;
		    border-top-style: solid;
		}
		.sub-menu-box .arrow-out {
		    bottom: -6px;
		    display: inline-block;
		    width: 0;
		    height: 0;
		    border-width: 6px;
		    border-style: dashed;
		    border-color: transparent;
		    border-bottom-width: 0;
		    border-top-color: #d0d0d0;
		    border-top-style: solid;
		}
		.sub-menu-item.current{
		
		}
		.sub-menu-inner-add{
		    display: block;
		    border-top: 1px solid #e7e7eb;
		    width: auto;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    word-wrap: normal;
		    cursor: pointer;
		}
		.weixin-icon{
		    background: url(../../../imgs/weixin_icon.png) 0 -4418px no-repeat;
		    width: 16px;
		    height: 16px;
		    vertical-align: middle;
		    display: inline-block;
		    line-height: 100px;
		    overflow: hidden;
		}
		.weixin-icon.add-gray {
		    background-position: 0 0;
		}
		.weixin-icon.sort-gray {
		    background: url(../../../imgs/weixin_icon.png) 0 -32px no-repeat;
		    background-position: 0 -32px;
		    margin-top: -1px;
		    display:none;
		    width: 20px;
		}
		.weixin-icon.big-add-gray{
		    background-position: -36px 0;
		    width: 36px;
		    height: 36px;
		    vertical-align: middle;
		}
		.menu-item a.menu-link:hover{
		
		}
		
		.add-item.extra,.add-item.extra{
		    float: none;
		    width: auto;
		    overflow: hidden;
		}
		
		table.btn-bar{width:100%;}
		table.btn-bar td{ text-align: center; }
		
		.item-info .item-head{
		    position:relative;
		    padding: 0;
		    border-bottom: 1px solid #e7e7eb;
		}
		.item-info .item-delete{
		    position:absolute;
		    top:0;
		    right:0;
		}
		
		table.weixin-form td{
		    vertical-align:middle;
		    height:24px;
		    line-height: 24px;
		    padding: 8px 0;
		}
		
		#menu-content{
		    background-color: #fff;
		    padding: 16px 20px;
		    border: 1px solid #e7e7eb;
		}
		.menu-content-tips{
		    color: #8d8d8d;
		    padding-bottom: 10px;
		}
		
		.form-item dl{
		    position:relative;
		    margin:10px 0;
		}
		.form-item dl dt{
		    width:90px;
		    height: 30px;
		    line-height: 30px;
		    text-align: right;
		    position:absolute;
		    vertical-align: middle;
		    top:0;
		    left:0;
		    bottom:0;
		    display:block;
		}
		.form-item dl dd{
		    position:relative;
		    display:block;
		    margin-left: 90px;
		    line-height: 30px;
		}
		.form-item .input-box {
		    display: inline-block;
		    position: relative;
		    height: 30px;
		    line-height: 30px;
		    vertical-align: middle;
		    width: 278px;
		    font-size: 14px;
		    padding: 0 10px;
		    border: 1px solid #e7e7eb;
		    box-shadow: none;
		    -moz-box-shadow: none;
		    -webkit-box-shadow: none;
		    border-radius: 0;
		    -moz-border-radius: 0;
		    -webkit-border-radius: 0;
		    background-color: #fff;
		}
		.form-item .input-box input{
		    width: 100%;
		    background-color: transparent;
		    border: 0;
		    outline: 0;
		    height:30px;
		}
		
		.clickbox{
		    text-align: center;
		    margin:40px 0;
		}
		.create-click{
		    display: inline-block;
		    padding-top: 30px;
		    position: relative;
		    width:240px;
		    height: 120px;
		    border: 2px dotted #d9dadc;
		    text-align: center;
		    margin-bottom: 20px;
		    margin-left: 50px;
		}
		.create-click a{
		    display:block;
		}
		.create-click a strong{
		    display:block;
		}
		
		.keytitle {
		    position:absolute;
		    width:100%;
		    text-align:center;
		    top:0px;
		    height:35px;
		    line-height:35px;
		    background:#f4f5f9;
		}
		dl.is-item dd>label {margin-left:5px;}
	</style>
	
	<div class="panel panel-default panel-intro">
		
		
	    <div class="panel-body">
	        <div id="myTabContent" class="tab-content">
	            <div class="tab-pane fade active in" id="one">
	                <div class="widget-body no-padding">
	                    <div class="weixin-menu-setting clearfix">
	                    	
	                    	
	                    	<div class="mobile-menu-preview">
	                            <div class="mobile-head-title">美林苑</div>
	                            <ul class="menu-list" id="menu-list">
	                                <li class="add-item extra" id="add-item">
	                                    <a href="javascript:;" class="menu-link" title="添加菜单"><i class="weixin-icon add-gray"></i></a>
	                                </li>
	                            </ul>
	                        </div>
	                        
	                        
	                        <div class="weixin-body">
                            	<div class="weixin-content" style="display:none;">
                                	<div class="item-info">
                                		<form id="form-item" class="form-item" data-value="" >
                                			
                                			<div class="item-head">
	                                            <h4 id="current-item-name" style="margin-bottom: 10px;">添加子菜单</h4>
	                                            <div class="item-delete"><a href="javascript:;" id="item_delete" style="margin-bottom: 10px;color: green;">删除菜单</a></div>
	                                        </div>
	                                        
	                                        <div style="margin-top: 20px;">
	                                        	<dl>
	                                                <dt id="current-item-option"><span class="is-sub-item">子</span>菜单标题：</dt>
	                                                <dd><div class="input-box"><input id="item_title" name="item-title" type="text" value=""></div></dd>
	                                            </dl>
	                                            
	                                            <dl class="is-item">
	                                                <dt id="current-item-type"><span class="is-sub-item">子</span>菜单内容：</dt>
	                                                <dd>
	                                                    <input id="type1" type="radio" name="type" value="click"><label for="type1" data-editing="1"><span class="lbl_content">发送消息</span></label>
	                                                    <input id="type2" type="radio" name="type" value="view" ><label for="type2"  data-editing="1"><span class="lbl_content">跳转网页</span></label>
	                                                    <input id="type3" type="radio" name="type" value="scancode_push"><label for="type3" data-editing="1"><span class="lbl_content">扫码推</span></label>
	                                                    <input id="type4" type="radio" name="type" value="scancode_waitmsg"><label for="type4" data-editing="1"><span class="lbl_content">扫码推提示框</span></label>
	                                                    <input id="type5" type="radio" name="type" value="pic_sysphoto"><label for="type5" data-editing="1"><span class="lbl_content">拍照发图</span></label>
	                                                    <input id="type6" type="radio" name="type" value="pic_photo_or_album"><label for="type6" data-editing="1"><span class="lbl_content">拍照相册发图</span></label>
	                                                    <input id="type7" type="radio" name="type" value="pic_weixin"><label for="type7" data-editing="1"><span class="lbl_content">相册发图</span></label>
	                                                    <input id="type8" type="radio" name="type" value="location_select"><label for="type8" data-editing="1"><span class="lbl_content">地理位置选择</span></label>
	                                                </dd>
	                                            </dl>
	                                            
	                                            
	                                            <div id="menu-content" class="is-item">
	                                                <div class="viewbox is-view">
	                                                    <p class="menu-content-tips">点击该<span class="is-sub-item">子</span>菜单会跳到以下链接</p>
	                                                    <dl>
	                                                        <dt>页面地址：</dt>
	                                                        <dd><div class="input-box"><input type="text" id="url" name="url"></div>
	                                                        </dd>
	                                                    </dl>
	                                                </div>
	                                                <div class="clickbox is-click" style="display: none;">
	                                                    <input type="hidden" name="key" id="key" value="" />
	                                                    <span class="create-click"><a href="" id="select-resources"><i class="weixin-icon big-add-gray"></i><strong>选择现有资源</strong></a></span>
	                                                    <span class="create-click"><a href="" id="add-resources"><i class="weixin-icon big-add-gray"></i><strong>添加新资源</strong></a></span>
	                                                </div>
	                                            </div>
                                            
	                                        </div>
                                        
                                		</form>
                                	</div>
                               	</div>
                               	
                               	<div class="no-weixin-content">
                               		 点击左侧菜单进行编辑操作
                            	</div>
                            
                           	</div>
	                        
	                    </div>
	                    
	                    <div class="row">
	                    	<div class="col-xs-4 text-center text-danger">
	                            <i class="fa fa-lightbulb-o"></i> <small>可直接拖动菜单排序</small>
	                        </div>

	                        <div>
	                        	<div class="col-xs-8 text-center">
	                        		<a href="javascript:;" id="menuSyn" class="btn btn-danger">保存</a>
	                        		<a href="javascript:;" id="fabu" class="btn btn-danger" style="display: none;">发布</a>
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


<script type="text/javascript">


	$.post("<?php echo e(url('system/index/getMenu')); ?>", {}, function (data) {
        
        init_menu(JSON.parse(data['value']));
        
    }, 'json');
	
	String.prototype.subByte = function(start, bytes) {

		for(var i = start; bytes > 0; i++) {
			var code = this.charCodeAt(i);
			bytes -= code < 256 ? 1 : 2;
		}
		return this.slice(start, i + bytes)
	};

//	init_menu([{"name":"添加菜单","type":"click","key":""}]);
	
	function init_menu(menu) {

		var str ="";
        var items = menu;
        var type = action = "";
        for (i in items) {
                    
            if (items[i]['sub_button'] != undefined) {
                type = action = "";
            } else {
                type = items[i]['type'];
                if (items[i]['url'] != undefined)
                    action = "url|" + items[i]['url'];
                if (items[i]['key'] != undefined)
                    action = "key|" + items[i]['key'];
            }
            str += '<li id="menu-' + i + '" class="menu-item" data-type="' + type + '" data-action="' + action + '" data-name="' + items[i]['name'] + '"> <a href="javascript:;" class="menu-link"> <i class="icon-menu-dot"></i> <i class="weixin-icon sort-gray"></i> <span class="title">' + items[i]['name'] + '</span> </a>';
            var tem = '';
            if (items[i]['sub_button'] != undefined) {
                var sub_menu = items[i]['sub_button'];
                for (j in sub_menu) {
                    type = sub_menu[j]['type'];
                    if (sub_menu[j]['url'] != undefined)
                        action = "url|" + sub_menu[j]['url'];
                    if (sub_menu[j]['key'] != undefined)
                        action = "key|" + sub_menu[j]['key'];
                    tem += '<li id="sub-menu-' + j + '" class="sub-menu-item" data-type="' + type + '" data-action="' + action + '" data-name="' + sub_menu[j]['name'] + '"> <a href="javascript:;"> <i class="weixin-icon sort-gray"></i><span class="sub-title">' + sub_menu[j]['name'] + '</span></a> </li>';
                }
            }
            str += '<div class="sub-menu-box" style="' + (i != 0 ? 'display:none;' : '') + '"> <ul class="sub-menu-list">' + tem + '<li class=" add-sub-item"><a href="javascript:;" title="添加子菜单"><span class=" "><i class="weixin-icon add-gray"></i></span></a></li> </ul> <i class="arrow arrow-out"></i> <i class="arrow arrow-in"></i></div>';
            str += '</li>';
        }
        $("#add-item").before(str);
    }
    
    function refresh_type() {
      
        if ($('input[name=type]:checked').val() == 'view') {
            $(".is-view").show();
            $(".is-click").hide();
        } else {
            $(".is-view").hide();
            $(".is-click").show();
        }
    }
       
            
    //拖动排序
    new Sortable($("#menu-list")[0], {draggable: 'li.menu-item'});
    $(".sub-menu-list").each(function () {
        new Sortable(this, {draggable: 'li.sub-menu-item'});
    });
    
    //添加主菜单
    $(document).on('click', '#add-item',function() {

		var menu_item_total = $(".menu-item").size();
		if(menu_item_total < 3) {
			var item = '<li class="menu-item" data-type="click" data-action="key|" data-name="添加菜单" > <a href="javascript:;" class="menu-link"> <i class="icon-menu-dot"></i> <i class="weixin-icon sort-gray"></i> <span class="title">添加菜单</span> </a> <div class="sub-menu-box" style=""> <ul class="sub-menu-list"><li class=" add-sub-item"><a href="javascript:;" title="添加子菜单"><span class=" "><i class="weixin-icon add-gray"></i></span></a></li> </ul> <i class="arrow arrow-out"></i> <i class="arrow arrow-in"></i> </div></li>';
			var itemDom = $(item);
			itemDom.insertBefore(this);
			itemDom.trigger("click");
			$(".sub-menu-box", itemDom).show();
			new Sortable($(".sub-menu-list", itemDom)[0], {
				draggable: 'li.sub-menu-item'
			});
		}
	});

	$(document).on('change', 'input[name=type]', function () {
       
        refresh_type();
    });
    
    $(document).on('click', '#item_delete', function () {
                
        var current = $("#menu-list li.current");
        var prev = current.prev("li[data-type]");
        var next = current.next("li[data-type]");

        if (prev.size() == 0 && next.size() == 0 && $(".sub-menu-box", current).size() == 0) {
            last = current.closest(".menu-item");
        } else if (prev.size() > 0 || next.size() > 0) {
            last = prev.size() > 0 ? prev : next;
        } else {
            last = null;
            $(".weixin-content").hide();
            $(".no-weixin-content").show();
        }
        $("#menu-list li.current").remove();
        if (last) {
            last.trigger('click');
        } else {
            $("input[name='item-title']").val('');
        }
       	updateChangeMenu();
    });

    //更新修改与变动
    function updateChangeMenu() {

    	var title = $("input[name='item-title']").val();
    	var type = $("input[name='type']:checked").val();
    	var key = value = '';
    	if(type =='view') {
			key = 'url';
		} else {
			key ='key';
        }
        
        value = $("input[name='" + key + "']").val();

		if(key == 'key') {
		
		}
		
		var currentItem = $("#menu-list li.current");
        if (currentItem.size() > 0) {
            currentItem.attr('data-type', type);
            currentItem.attr('data-action', key + "|" + value);
            if (currentItem.siblings().size() == 4) {
                $(".add-sub-item").show();
            } else if (false) {

            }
            currentItem.children("a").find("span").text(title.subByte(0, 16));
            $("input[name='item-title']").val(title);
            currentItem.attr('data-name', title);
            $('#current-item-name').text(title);
        }
        menuUpdate();
    }
            
    //更新菜单数据
    function menuUpdate() {
                
    }
            
    //获取菜单数据
    function getMenuList() {

        var menus = new Array();
        var sub_button = new Array();
        var menu_i = 0;
        var sub_menu_i = 0;
        var item;
        $("#menu-list li").each(function (i) {
            item = $(this);
                    var name = item.attr('data-name');
                    var type = item.attr('data-type');
                    var action = item.attr('data-action');
                    if (name != null) {
                        actions = action.split('|');
                        if (item.hasClass('menu-item')) {
                            sub_menu_i = 0;
                            if (item.find('.sub-menu-item').size() > 0) {
                                menus[menu_i] = {"name": name, "sub_button": "sub_button"}
                            } else {
                                if (actions[0] == 'url')
                                    menus[menu_i] = {"name": name, "type": type, "url": actions[1]};
                                else
                                    menus[menu_i] = {"name": name, "type": type, "key": actions[1]};
                            }
                            if (menu_i > 0) {
                                if (menus[menu_i - 1]['sub_button'] == "sub_button")
                                    menus[menu_i - 1]['sub_button'] = sub_button;
                                else
                                    menus[menu_i - 1]['sub_button'];
                            }
                            sub_button = new Array();
                            menu_i++;
                        } else {
                            if (actions[0] == 'url')
                                sub_button[sub_menu_i++] = {"name": name, "type": type, "url": actions[1]};
                            else
                                sub_button[sub_menu_i++] = {"name": name, "type": type, "key": actions[1]};
                        }
                    }
                });
                if (sub_button.length > 0) {
                    var len = menus.length;
                    menus[len - 1]['sub_button'] = sub_button;
                }
                return menus;
            }
    
    //添加子菜单
    $(document).on('click', ".add-sub-item",function() {
		var sub_menu_item_total = $(this).parent().find(".sub-menu-item").size();
		if(sub_menu_item_total < 5) {
			var item = '<li class="sub-menu-item" data-type="click" data-action="key|" data-name="添加子菜单"><a href="javascript:;"><span class=" "><i class="weixin-icon sort-gray"></i><span class="sub-title">添加子菜单</span></span></a></li>';
			var itemDom = $(item);
			itemDom.insertBefore(this);
			itemDom.trigger("click");
			if(sub_menu_item_total == 4) {
				$(this).hide();
			}
		}
		return false;
	});
	
	//主菜单子菜单点击事件
    $(document).on('click', ".menu-item, .sub-menu-item", function () {

                if ($(this).hasClass("sub-menu-item")) {
                    $("#menu-list li").removeClass('current');
                    $(".is-item").show();
                    $(".is-sub-item").show();
                } else {
                    $("#menu-list li").removeClass('current');
                    $("#menu-list > li").not(this).find(".sub-menu-box").hide();
                    $(".sub-menu-box", this).toggle();
                    //如果当前还没有子菜单
                    if ($(".sub-menu-item", this).size() == 0) {
                        $(".is-item").show();
                        $(".is-sub-item").show();
                    } else {
                        $(".is-item").hide();
                        $(".is-sub-item").hide();
                    }
                }
                $(this).addClass('current');
                
                var type = $(this).attr('data-type');
                var action = $(this).attr('data-action');
                var title = $(this).attr('data-name');

                actions = action.split('|');
                $("input[name=type][value='" + type + "']").prop("checked", true);
                $("input[name='item-title']").val(title);
                $('#current-item-name').text(title);
                if (actions[0] == 'url') {
                    $('input[name=key]').val('');
                } else {
                    $('input[name=url]').val('');
                }
                $("input[name='" + actions[0] + "']").val(actions[1]);
                if (actions[0] == 'key') {
                    
                } else {

                }

                $(".weixin-content").show();
                $(".no-weixin-content").hide();

                refresh_type();

                return false;
            });
            
            
    $("form").on('change', "input,textarea", function () {

        updateChangeMenu();
    });
    
    var meta = document.getElementsByTagName('meta');
           
    $(document).on('click', "#menuSyn", function () {
    	
    	layer.load();
    	
    	$.ajax({
    		type:"post",
    		dataType:'json',
    		url:"<?php echo e(url('system/index/updateMenu')); ?>",
    		async:true,
    		data:{menu:JSON.stringify(getMenuList())},
    		headers: {
                'X-CSRF-TOKEN': meta[3].getAttribute('content')
            },
            success:function(data){
            	
            	$('#menuSyn').hide();
            	
            	$('#fabu').show();
            	
            	layer.closeAll('loading');
            	
            	layer.msg(data['message']);
            }
    	});
    
    });


    $(document).on('click', "#fabu", function () {
    	
    	layer.load();
    	
    	$.ajax({
    		
    		dataType:'json',
    		url:"<?php echo e(url('/menu')); ?>",
    		async:true,
    		data:{menu:JSON.stringify(getMenuList())},
    		headers: {
                'X-CSRF-TOKEN': meta[3].getAttribute('content')
            },
            success:function(data){
            	
            	$('#menuSyn').show();
            	
            	$('#fabu').hide();
            	
            	layer.closeAll('loading');
            	
            	layer.msg(data['message']);
            }
    	});
    
    });
            
      
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>