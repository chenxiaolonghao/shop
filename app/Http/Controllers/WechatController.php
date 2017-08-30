<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use EasyWeChat\Foundation\Application;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use DB;

class WechatController extends Controller
{
	

    public function serve()
    
    {
        $wechat = app('wechat');
                     
        $wechat->server->setMessageHandler(function ($message) use ($wechat){

            
                switch ($message->MsgType) {
                    case 'event':
                        {
                            if ($message->Event == 'subscribe') {
                                
                                $fromUserName = $message->FromUserName;
                                $nickname = $wechat->user->get($message->FromUserName)->nickname;
                                $imgurl = $wechat->user->get($message->FromUserName)->headimgurl;
                                $qrcode = $message->EventKey;

                                $isexist = DB::table('mly_user')->where('weixin_id',$fromUserName)->first();

                                $maxcode = DB::select('select max(qrcode) from mly_user');

                                if (!$isexist) {
                                
                                    $k = 0;
                                    $userid = '';
                                    $code = '';
                                    $nextnum = 1;
                                
                                    if($qrcode != null || $qrcode || $qrcode != ''){
                                    
                                        $code = substr($qrcode,8);
                                    
                                        $user = DB::select('select id from mly_user where qrcode = '.$code);
                                        $userid = object_to_array($user)[0]['id'];
                                    
                                        $k = 1;
                                    }

                                    $qrcodenum = object_to_array($maxcode)[0]['max(qrcode)'];

                                    if (!$qrcodenum) {
                                        $nextnum = 100;
                                    }else{
                                        $nextnum = $qrcodenum + 1;
                                    }

                                    if($k == 0)
                                    {

                                        $res=DB::insert("insert into mly_user (nickname,weixin_id,imgurl,qrcode,cardnum,create_time) values (?,?,?,?,?,?)",[$nickname,$fromUserName,$imgurl,$nextnum,date('Ymdhis'),date('Y-m-d h:i:s')]);

                                        return '欢迎，关注河南美林苑！';

                                    }else{

                                        if ($userid != '' || $userid || $userid != null) {

                                            $res = DB::insert("insert into mly_user (nickname,weixin_id,imgurl,qrcode,fromuser,cardnum,create_time) values (?,?,?,?,?,?,?)",[$nickname,$fromUserName,$imgurl,$nextnum,$userid,date('Ymdhis'),date('Y-m-d h:i:s')]);

                                            if ($res) {

                                                DB::update("update mly_user set integral = integral+20 where id = ".$userid);

                                                $myinfo = DB::select('select id from mly_user where weixin_id = '."'".$fromUserName."'");
                                                $myid = object_to_array($myinfo)[0]['id'];


                                                $data['user_id'] = $myid;
                                                $data['type'] = 0;
                                                $data['describe'] = '邀请好友';
                                                $data['score'] = '20';
                                                $data['create_time'] = date('Y-m-d h:i:s');

                                                DB::table('mly_integral_record')->insert($data);


                                                return '欢迎，关注河南美林苑111！';
                                            }
                                        }
                                    }
                                }

                                return '欢迎，关注河南美林苑1111';
                            }
                        }
                        break;
                    default:
                       
                        break;
                }
        });


        return $wechat->server->serve();
    }

	// public function serve()
 //    {

 //        $wechat = app('wechat');
 //        $wechat->server->setMessageHandler(function($message) use ($wechat){


 //            switch ($message->MsgType) {
 //                case 'event':
 //                    {
 //                        if ($message->Event == 'subscribe') {


 //                            $fromUserName = $message->FromUserName;
 //                            $nickname = $wechat->user->get($message->FromUserName)->nickname;
 //                            $imgurl = $wechat->user->get($message->FromUserName)->headimgurl;
 //                            $qrcode = $message->EventKey;

 //                            $isexist = DB::table('mly_user')->where('weixin_id',$fromUserName)->first();
 //                            $maxcode = DB::select('select max(qrcode) from mly_user');

 //                            if (!$isexist) {
                                
	// 							$k = 0;
	// 							$userid = '';
 //                                $code = '';
								
	// 							if($qrcode != null || $qrcode || $qrcode != ''){
									
	// 								$code = substr($qrcode,8);
									
	// 								$user = DB::select('select id from mly_user where qrcode = '.$code);
	// 								$userid = object_to_array($user)[0]['id'];
									
	// 								$k = 1;
	// 							}
								
 //                                $qrcodenum = object_to_array($maxcode[0])['max(qrcode)'];

 //                                $nextnum = 1;

 //                                if (!$qrcodenum) {
 //                                   $nextnum = 100;
 //                                }else{
 //                                    $nextnum = $qrcodenum + 1;
 //                                }
								
	// 							if($k == 0)
	// 							{
	// 								DB::insert("insert into mly_user (nickname,weixin_id,imgurl,qrcode,cardnum,create_time) values (?,?,?,?,?,?)",[$nickname,$fromUserName,$imgurl,$nextnum,date('Ymdhis'),date('Y-m-d h:i:s')]);
	// 						    }else{

 //                                    if ($userid != '' || $userid || $userid != null) {

 //                                        $res = DB::insert("insert into mly_user (nickname,weixin_id,imgurl,qrcode,fromuser,cardnum,create_time) values (?,?,?,?,?,?,?)",[$nickname,$fromUserName,$imgurl,$nextnum,$userid,date('Ymdhis'),date('Y-m-d h:i:s')]);

 //                                        if ($res) {

 //                                            DB::update("update mly_user set integral = integral+20 where id = ".$userid);

 //                                            $myinfo = DB::select('select id from mly_user where weixin_id = '."'".$fromUserName,"'");
 //                                            $myid = object_to_array($myinfo)[0]['id'];
                                            
 //                                            DB::insert("insert mly_integral_record (userid,type,describe,score,create_time) values (?,?,?,?,?)",[$myid,0,'邀请好友','20',date('Y-m-d h:i:s')]);
 //                                        }

 //                                    }
	// 						    }
 //                                return '欢迎，关注河南美林苑！';
 //                            }

 //                            return '欢迎，关注河南美林苑！';
 //                        }

 //                        if ($message->Event == 'CLICK') {,score
 //                            if ($message->EventKey == 'YOU_CLICK_ME') {
                                

 //                            }
 //                        }
 //                    }
 //                    break;
 //                case 'text':
 //                {      

 //                    return '23231';
 //                }
 //                    break;
 //                case 'image':
                    
 //                    break;
 //                case 'voice':
 //                    return '收到语音消息';
 //                    break;
 //                case 'video':
 //                    return '收到视频消息';
 //                    break;
 //                case 'location':
 //                    return '收到坐标消息';
 //                    break;
 //                case 'link':
 //                    return '收到链接消息';
 //                    break;
 //                default:
 //                    return '收到其它消息';
 //                    break;
 //            }

 //        });

 //        return $wechat->server->serve();
 //    }


	public function getQrcode(Request $request)
	{
		
		$idstr = $request->get('userid');	
		if(!$idstr)
		{
			return $this->apiReturn('1','参数错误');
		}
		
		
		$data = DB::table('mly_user')->where('id',$idstr)->select('qrcode')->first();
		
		$code = object_to_array($data)['qrcode'];
		
		$wechat = app('wechat');
    	$qrcode = $wechat->qrcode;
    	$result = $qrcode->temporary($code,3600);
    	
    	return $qrcode->url($result->ticket);
	}
	
	
	public function shareMess()
	{
		$wechat = app('wechat');
		
		$js = $wechat->js;
		
		return $js->config(array('onMenuShareQQ', 'onMenuShareWeibo'), $debug = true);
	}
}

