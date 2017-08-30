<?php

namespace App\Http\Controllers\System;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;


class IndexController extends Controller
{

    public function index()
    {
        return view('system.index');
    }
	
	
	
	public function getMenu()
	{
		
		$res = DB::table('mly_wechat_config')->where('id','1')->select('value')->first();
		
		return object_to_array($res);
		
	}
	
	public function updateMenu()
	{
		$menu = Input::get('menu');
		
		
		if($menu){
			
			$res = DB::update("update mly_wechat_config set value = "."'".$menu."'"." where name = '微信菜单'");
			
			if($res){
			
				// $tmp = json_decode($menu);

				// $this->addmenu(object_to_array($tmp));
				
				return apiReturn('0', '成功');
			}else{
				return apiReturn('1', '菜单没有改变');
			}
		}
		
		return apiReturn('1', '失败');
	}
}
