<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/',function(){

//  $wechat = app('wechat');
//  $qrcode = $wechat->qrcode;
//  $result = $qrcode->temporary(100,3600);

    return view('home');
});

Route::get('/home',function(){
    return view('welcome');
});

Route::get('admin/index', ['as' => 'admin.index', 'middleware' => ['auth','menu'], 'uses'=>'Admin\IndexController@index']);


//修改密码
Route::any('admin/resetpwd/index', ['as' => 'admin.resetpwd.index', 'uses' => 'Admin\ResetpwdController@index']);
Route::any('admin/resetpwd/setPassword', ['as' => 'admin.resetpwd.setPassword', 'uses' => 'Admin\ResetpwdController@setPassword']);
	

$this->group(['namespace' => 'Admin','prefix' => '/admin',], function () {
    Route::auth();
});


//测试接口
Route::group(['namespace' => 'Test', 'middleware' => ['auth','menu']],function(){

    Route::any('test/index/index/{id?}', ['as' => 'test.index.index', 'uses' => 'TestController@index']);

});

Route::group(['namespace' => 'Member', 'middleware' => ['auth','menu']],function(){

    //会员系统
    Route::get('member/permission', ['as' => 'member.permission', 'uses' => 'IndexController@index']);
    Route::any('member/index/index', ['as' => 'member.index.index', 'uses' => 'IndexController@index']);

    //积分规则
    Route::any('member/rule/index', ['as' => 'member.rule.index', 'uses' => 'RuleController@index']);

});


//项目
Route::group(['namespace' => 'Project', 'middleware' => ['auth','menu']],function(){

    //项目
    Route::get('project/permission', ['as' => 'project.permission', 'uses' => 'IndexController@index']);


    Route::any('project/index/index', ['as' => 'project.index.index', 'uses' => 'IndexController@index']);
    Route::any('project/index/create', ['as' => 'project.index.create', 'uses' => 'IndexController@create']);
    Route::any('project/index/edit/{id?}', ['as' => 'project.index.edit', 'uses' => 'IndexController@edit']);
    Route::any('project/index/update', ['as' => 'project.index.update', 'uses' => 'IndexController@update']);
    Route::any('project/index/delete', ['as' => 'project.index.delete', 'uses' => 'IndexController@delete']);

});

//整形百科
Route::group(['namespace' => 'Plastic', 'middleware' => ['auth','menu']],function(){

    Route::any('plastic/permission', ['as' => 'plastic.permission', 'uses' => 'IndexController@index']);

    Route::any('plastic/index/index', ['as' => 'plastic.index.index', 'uses' => 'IndexController@index']);
    Route::any('plastic/index/create', ['as' => 'plastic.index.create', 'uses' => 'IndexController@create']);
    Route::any('plastic/index/edit/{id?}', ['as' => 'plastic.index.edit', 'uses' => 'IndexController@edit']);
    Route::any('plastic/index/update', ['as' => 'plastic.index.update', 'uses' => 'IndexController@update']);
    Route::any('plastic/index/delete', ['as' => 'plastic.index.delete', 'uses' => 'IndexController@delete']);

});

//预约医生
Route::group(['namespace' => 'Appointment', 'middleware' => ['auth','menu']],function(){

    Route::any('appointment/permission', ['as' => 'appointment.permission', 'uses' => 'IndexController@index']);

    Route::any('appointment/index/index', ['as' => 'appointment.index.index', 'uses' => 'IndexController@index']);
    Route::any('appointment/index/edit/{id?}', ['as' => 'appointment.index.edit', 'uses' => 'IndexController@edit']);
    Route::any('appointment/index/update', ['as' => 'appointment.index.update', 'uses' => 'IndexController@update']);
    Route::any('appointment/index/delete', ['as' => 'appointment.index.delete', 'uses' => 'IndexController@delete']);

});


Route::group(['namespace' => 'Good', 'middleware' => ['auth','menu']],function(){

    //商品
    Route::any('good/permission', ['as' => 'good.permission', 'uses' => 'IndexController@index']);
    Route::any('good/index/index', ['as' => 'good.index.index', 'uses' => 'IndexController@index']);
	Route::any('good/index/create', ['as' => 'good.index.create', 'uses' => 'IndexController@create']);
	Route::post('good/index/addPro', ['as' => 'good.index.addPro', 'uses' => 'IndexController@addPro']);
	Route::any('good/index/edit/{id?}', ['as' => 'good.index.edit', 'uses' => 'IndexController@edit']);
	Route::post('good/index/editPro', ['as' => 'good.index.editPro', 'uses' => 'IndexController@editPro']);


	//列表接口
	Route::any('good/index/api_list', ['as' => 'good.index.api_list', 'uses' => 'IndexController@api_list']);

    Route::any('good/cashcoupon/index', ['as' => 'good.cashcoupon.index', 'uses' => 'CashcouponController@index']);
    Route::any('good/cashcoupon/create', ['as' => 'good.cashcoupon.create', 'uses' => 'CashcouponController@create']);
	
	//积分券
	Route::any('good/ticket/index', ['as' => 'good.ticket.index', 'uses' => 'TicketController@index']);
	//新增积分券
	Route::any('good/ticket/create', ['as' => 'good.ticket.create', 'uses' => 'TicketController@create']);
	//删除积分券
	Route::any('good/ticket/delete', ['as' => 'good.ticket.delete', 'uses' => 'TicketController@delete']);
	//积分券详情
	Route::any('good/ticket/detail/{id?}', ['as' => 'good.ticket.detail', 'uses' => 'TicketController@detail']);
	//积分券修改
	Route::any('good/ticket/update', ['as' => 'good.ticket.update', 'uses' => 'TicketController@update']);
	
	
	//优惠券
	Route::get('good/coupon/index', ['as' => 'good.coupon.index', 'uses' => 'CouponController@index']);
	//新增优惠券
	Route::any('good/coupon/create', ['as' => 'good.coupon.create', 'uses' => 'CouponController@create']);
	//删除优惠券
	Route::any('good/coupon/delete', ['as' => 'good.coupon.delete', 'uses' => 'CouponController@delete']);
	//优惠券修改
	Route::any('good/coupon/update/{id?}', ['as' => 'good.coupon.update', 'uses' => 'CouponController@update']);
	
});


Route::group(['namespace' => 'System', 'middleware' => ['auth','menu']],function(){

    //设置
    Route::any('system/permission', ['as' => 'system.permission', 'uses' => 'IndexController@index']);
    Route::any('system/index/index', ['as' => 'system.index.index', 'uses' => 'IndexController@index']);
	
	Route::any('system/index/getMenu', ['as' => 'system.index.getMenu', 'uses' => 'IndexController@getMenu']);
	
	Route::any('system/index/updateMenu', ['as' => 'system.index.updateMenu', 'uses' => 'IndexController@updateMenu']);
    
    
});

//删除操作
Route::post('deleteapi/api_delete', 'DeleteapiController@api_delete')->name('post.admin.deleteapi.api_delete');

$router->group(['namespace' => 'Admin', 'middleware' => ['auth','authAdmin','menu']], function () {
    //权限管理路由
    Route::get('admin/permission/{cid}/create', ['as' => 'admin.permission.create', 'uses' => 'PermissionController@create']);
    Route::get('admin/permission/{cid?}', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']);
    Route::post('admin/permission/index', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']); //查询

    Route::resource('admin/permission', 'PermissionController');
    Route::put('admin/permission/update', ['as' => 'admin.permission.edit', 'uses' => 'PermissionController@update']); //修改
    Route::post('admin/permission/store', ['as' => 'admin.permission.create', 'uses' => 'PermissionController@store']); //添加


    //角色管理路由
    Route::get('admin/role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::post('admin/role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::resource('admin/role', 'RoleController');
    Route::put('admin/role/update', ['as' => 'admin.role.edit', 'uses' => 'RoleController@update']); //修改
    Route::post('admin/role/store', ['as' => 'admin.role.create', 'uses' => 'RoleController@store']); //添加


    //用户管理路由
    Route::get('admin/user/manage', ['as' => 'admin.user.manage', 'uses' => 'UserController@index']);  //用户管理
    Route::post('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
    Route::resource('admin/user', 'UserController');
    Route::put('admin/user/update', ['as' => 'admin.user.edit', 'uses' => 'UserController@update']); //修改
    Route::post('admin/user/store', ['as' => 'admin.user.create', 'uses' => 'UserController@store']); //添加

});

Route::get('admin', function () {
    return redirect('/admin/index');
});

Route::auth();


Route::get('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');



//前端接口
Route::group(['middleware' => ['web']], function () {

    Route::any('/wechat', 'WechatController@serve');

    Route::get('/users','UserController@users');
    Route::get('/users/{openId}','UserController@user');
    Route::get('/remark','UserController@remark');


    Route::get('/menu','MenuController@menu');
    Route::get('/menu/all','MenuController@all');
	Route::any('/menu/destroy','MenuController@destroy');
	
	
	Route::any('/getQrcode','WechatController@getQrcode');
	Route::any('/shareMess','WechatController@shareMess');



    //测试接口
    Route::get('/api/demo','ApiController@demo');

    //获取微信用户的信息
    Route::any('/api/getOpenid','ApiController@getOpenid');
    Route::any('/api/getUserBaseInfo','ApiController@getUserBaseInfo');

    Route::any('/api/getSignPackage','ApiController@getSignPackage');

    //注册
    Route::any('/api/register','ApiController@register');

    //获取基本信息 
    Route::any('/api/getBaseInfo','ApiController@getBaseInfo');

    //签到
    Route::any('/api/taskSign','ApiController@taskSign');
    
    Route::any('/api/gettaskSigndate','ApiController@gettaskSigndate');

    Route::any('/api/getUserRank','ApiController@getUserRank');
    //积分排序
	Route::any('/api/getMemberRank','ApiController@getMemberRank');
	
	//获取礼品
	Route::any('/getGifts','ApiController@getGifts');
	
	//礼品兑换
	Route::any('/giftTrade','ApiController@giftTrade');
	
	//积分增加记录
	Route::any('/getIntegralRecord','ApiController@getIntegralRecord');
	
	//兑换交易记录
	Route::any('/getExchangeRecord','ApiController@getExchangeRecord');
	
	//医生点赞
	Route::any('/uploadThumbUp','ApiController@uploadThumbUp');
	
	//获取医生
	Route::any('/getDoctor','ApiController@getDoctor');

    //获取积分
    Route::any('/api/getUserIntegral','ApiController@getUserIntegral');
	
	//分享
	Route::any('/api/shareMessage','ApiController@shareMessage');
	
	//上传会员详细信息
    Route::post('/api/userDetail','ApiController@userDetail');
	
	//生成二维码
	Route::any('/api/getQrCode','ApiController@getQrCode');
	
	//上传建议
	Route::any('/api/uploadSuggest','ApiController@uploadSuggest');

    //商品收藏
    Route::any('productionCollection','ApiController@productionCollection');

    //心愿单的接口
    Route::any('/api/wishList','ApiController@wishList');

    Route::any('/api/wishListPraise','ApiController@wishListPraise');
		
	//七夕活动
	Route::any('/uploadUserInfo','ApiController@uploadUserInfo');

	Route::any('/uploadZMD','ApiController@uploadZMD');

    //整形百科的接口
    Route::any('/api/plastic','ApiController@plastic');

    //预约医生的接口
    Route::any('/api/appointment','ApiController@appointment');

    //取消预约医生的接口
    Route::any('/api/cancelappointment','ApiController@cancelappointment');

     //显示预约医生的接口
    Route::any('/api/appointmentdoctor','ApiController@appointmentdoctor');

});

//获取用户的信息
Route::group(['middleware' => ['web','wechat.oauth']], function () {
	
	
	Route::any('/getuserid', 'UsersController@getUserID');

    Route::any('/user',function(){    //获取openid

        $user = session('wechat.oauth_user');

        $openid = $user['id'];

        return apiReturn('0',$user['id']);
    });

    Route::any('/outhuser',function(){

        return Redirect::to("http://chenxiaolong.top/meilinyuan/1/1/member_center.html");
    });
	
	
	Route::any('/outhsign',function(){

        return Redirect::to("http://chenxiaolong.top/meilinyuan/1/1/sign.html");
    });
	
	
	Route::any('/outhqixi',function(){

        return Redirect::to("http://chenxiaolong.top/meilinyuan/1/1/qixi.html");
    });
	
	
	Route::any('/outhpoint',function(){

        return Redirect::to("http://chenxiaolong.top/meilinyuan/1/1/point_product.html");
    });


    Route::any('/user1',function(){

        $user = session('wechat.oauth_user');

        $openid = $user['id'];

        return apiReturn('0', $user['id']);
    });

    Route::any('/outhuser1',function(){

        return Redirect::to("http://chenxiaolong.top/meilinyuan/1/1/sign.html");

    });
});

require_once 'activity.php';



