<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public $wechat;

    public function __construct(Application $wechat)
    {
    	$this->wechat = $wechat;
    }


    public function users()
    {	
    	$users = $this->wechat->user->lists();
    	return $users;
    }

    public function user($openId)
    {
    	$user = $this->wechat->user->get($openId);
    	return $user;
    }

    public function outhuser($openId)
    {
        $user = $this->wechat->user->get($openId);
        return $user;
    }

    public function user1($openId)
    {
        $user = $this->wechat->user->get($openId);
        return $user;
    }


    public function outhuser1($openId)
    {
        $user = $this->wechat->user->get($openId);
        return $user;
    }


    public function remark()
    {
    	$this->wechat->user->remark('','');
    }
	
	
	public function getuserid()
	{
		$user = session('wechat.oauth_user');
		
        return apiReturn('0', $user['id']);
	}
}
