<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;


use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use DB;

class MenuController extends Controller
{
    public function __construct(Application $app)
    {
    	$this->menu = $app->menu;
    }


    public function menu()
    {

    	$menu = Input::get('menu');

		if($menu){
			
			$tmp = json_decode($menu);

			$this->menu->add(object_to_array($tmp));

			return apiReturn('0','成功');
		}else{
			return apiReturn('0','失败');
		}
    	
  //   	$buttons = [
		//     [
		//         "name"       => "品牌资质",
		//         "sub_button" => [
		//             [
		//                 "type" => "view",
		//                 "name" => "品牌资质",
		//                 "url"  => "http://chenxiaolong.top/mlyweixin/1/mly_culture.html"
		//             ],
		//         ]
		//     ],
		//     [
		//         "name"       => "积分商城",
		//         "sub_button" => [
		//             [
		//                 "type" => "view",
		//                 "name" => "会员中心",
		//                 "url"  => "http://chenxiaolong.top/mlyweixin/1/member_center.html"
		//             ],
		//             [
		//                 "type" => "view",
		//                 "name" => "会员签到",
		//                 "url"  => "http://chenxiaolong.top/mlyweixin/1/sign.html"
		//             ]
		//         ]
		//     ]
		// ];
		
		// $this->menu->add($buttons);
    }


    public function all()
    {
    	return $this->menu->current();
    }
	
	
	public function destroy()
	{
		return $this->menu->destroy();
	}
}
