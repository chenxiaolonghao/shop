<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;


use App\Models\MlyUser;
use App\Models\MlyQiXi;
use App\Models\MlyZMDQiXi;
use App\Models\MlySign;
use App\Models\MlyShare;
use App\Models\MlyDetailInfo;
use DB;


class ApiController extends Controller
{


	public function apiReturn($status,$message='',$data=''){

        $res = array();

        $res['status'] = $status;
        $res['message'] = $message;
        $res['data'] = $data;
        
        return $res;
    }


     /** 
     * 发送get请求 
     * @param string $url 
     * @return bool|mixed 
     */  
     function request_get($url = '')  
     {  
        if (empty($url)) {  
            return false;  
        }  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_TIMEOUT, 500);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $data = curl_exec($ch);  
        curl_close($ch);  
        return $data;  
    }


    public function https_request($url,$data = null){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    //取中间字符串
    public function getSubstr($str, $leftStr, $rightStr)
    {
        $left = strpos($str, $leftStr);
        $right = strpos($str, $rightStr,$left);
        if($left < 0 or $right < $left) return '';
        return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
    }

    /******************************************
	****AuThor : 胡猛
	****Title  : 测试方法
	*******************************************/
	public function demo(Request $request)
	{
		$maxcode = DB::select('select max(qrcode) from mly_user');
		p(object_to_array($maxcode)[0]['max(qrcode)']);
	}


	/******************************************
	****AuThor : 胡猛
	****Title  : 获取openid
	*******************************************/
	public function getOpenid(Request $request){//9dc1c9af72a8b806ffa24dfa21a5b9a3

        $appid = 'wx01d524b6a46a3884';
        $code = $request->get('code');
        $appsecret = 'ab6dcc21ccc1f0a965725eb7960d18a5';
        
        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';

        $res = $this->request_get($url);

        $openid = $this->getSubstr($res,'"openid":"','",');

        $access_token = $this->getSubstr($res,'"access_token":"','",');

        $expires_in = $this->getSubstr($res,'"expires_in":"','",');


        $arr = array(
            'openid' => $openid,
            'access_token' => $access_token,
            'expires_in' => $expires_in,
            'res'=>$res
            );
        
        return $this->apiReturn('0','成功',$arr);
    }

	/******************************************
	****AuThor : 胡猛
	****Title  : 获取accesstoken
	*******************************************/
	public function get_access_token(){

		$access_token = \Session::get('access_token');
		
		if($access_token)
		{
			return $access_token;
		}else{
			
			$appid = "wx6b235d0ef54f8644";
         $appsecret = "51863d483ee27828a765b7a068b56ac6";

         $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         $output = curl_exec($ch);
         curl_close($ch);
         $jsoninfo = json_decode($output, true);

         \Session::put('access_token',$jsoninfo['access_token'],7200);

         return $jsoninfo['access_token'];	
     }
 }


 public function getQrCode(){

   $access_token = $this->get_access_token();

   $url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
   $postArr = array(
    'expire_seconds'=>604800,
    'action_name'=>"QR_SCENE",
    'action_info'=>array(
     'scene'=>array('scene_id'=>2000),
     ),
    );

   $postJson = json_encode($postArr);

   $res = $this->https_request($url,$postJson);

   $url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".urlencode($res['ticket']);

   return $url;
}


public function getTicket()
{
  $access_token = $this->get_access_token();

  $tmpTick = \Session::get('ticket');
  if ($tmpTick) {

    return $tmpTick;
}else{

    $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=".$access_token;
    $res = json_decode ( $this->request_get( $url ) );

    $ticket = $res->ticket;

    \Session::set('ticket',$ticket,7200);

    return $ticket; 
}
}


public function createNonceStr($length = 16) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
        $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
}


public function getSignPackage(Request $request) {	

    $jsapiTicket = $this->getTicket();

    $url = $request->get('url');

    $timestamp = time();

    $nonceStr = $this->createNonceStr();

    $string = "jsapi_ticket=".$jsapiTicket.'&noncestr='.$nonceStr.'&timestamp='.$timestamp.'&url='.$url;

    $signature = sha1 ( $string );

    $signPackage["appId"] = "wx6b235d0ef54f8644";
    $signPackage["jsapiTicket"] = $jsapiTicket;
    $signPackage["nonceStr"] = $nonceStr;
    $signPackage["timestamp"] = $timestamp;
    $signPackage["url"] = $url;
    $signPackage["signature"] = $signature;
    $signPackage["rawString"] = $string;

    return $signPackage;
}

    /******************************************
	****AuThor : 胡猛
	****Title  : 获取微信用户的基本信息
	*******************************************/
    public function getUserBaseInfo(Request $request){

        $access_token = $this->get_access_token();

        $openid = $request->get('wxopenid');

        $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$access_token.'&openid='.$openid;

        $res = $this->https_request($url);

        $nickname = $this->getSubstr($res,'"nickname":"','",');

        $headimgurl = $this->getSubstr($res,'"headimgurl":"','",');

        $tmpArr = array(

            'nickname' => $nickname,
            'headimgurl' => $headimgurl
            );

        return $this->apiReturn('0','成功',$tmpArr);
    }

    /*****************shfdiojgioghiu***************************/

    /******************************************
    ****AuThor : 胡猛
    ****Title  : 注册
    *******************************************/
    public function register(Request $request)
    {
        $nickname = $request->get('nickname');
        $openid = $request->get('wxopenid');
        $imgurl = $request->get('headimgurl');

        if (!$openid) {

            return $this->apiReturn('1','参数错误');
        }


        $res = DB::table('mly_user')->where('weixin_id',$openid)->first();

        if ($res) {
            return $this->apiReturn('1','已有此商户');
        }else{

            DB::beginTransaction();

            try
            {

                $user = new MlyUser;
                $user->nickname = $nickname;
                $user->weixin_id = $openid;
                $user->imgurl = $imgurl;
                $user->cardnum = date('Ymdhis');
                $user->create_time = date('Y-m-d h:i:s');

                if ($user->save()) {
                	
                 DB::commit();

                 $tmpArr = array(

                   'userid' => $user->id,
                   'cardnum' => $user->cardnum
                   );

                 return $this->apiReturn('0','注册成功',$tmpArr);

             }else{

                DB::rollBack();
                return $this->apiReturn('1','注册失败');
            }
        }
        catch (\Exception $e)
        {
            DB::rollBack();

            return $this->apiReturn('1','注册失败');
        }

    }
}


    /******************************************
    ****AuThor : 胡猛
    ****Title  : 获取用户基本信息
    *******************************************/
    public function getBaseInfo(Request $request)
    {
        $openid = $request->get('openid');

        if (!$openid) {
            return $this->apiReturn('1','参数错误');
        }


        $data = DB::table('mly_user')->where('weixin_id',$openid)->first();


        return $this->apiReturn('0','成功',$data);
    }

    /******************************************
    ****AuThor : 胡猛
    ****Title  : 返回已经签到的日期
    *******************************************/
    public function gettaskSigndate(Request $request){

        if (!($request->has('idstr'))) {

            return $this->apiReturn('1','参数错误');
        }
        $idstr = $request->get('idstr');

        $signs = DB::table('mly_sign')->where('user_id',$idstr)->orderBy('sign_date','desc')->get();

        if($signs){

           return $this->apiReturn('0','查询数据成功',$signs);

       }else{

        return $this->apiReturn('1','该用户还没有签到');
    }

}

    /******************************************
    ****AuThor : 胡猛
    ****Title  : 签到
    *******************************************/
    public function taskSign(Request $request)
    {
        if (!($request->has('idstr'))) {

            return $this->apiReturn('1','参数错误');
        }
        if (!($request->has('signdate'))) {

            return $this->apiReturn('1','参数错误');
        }


        $idstr = $request->get('idstr');
        $datestr = $request->get('signdate');


        $user = DB::table('mly_user')->where('id',$idstr)->get();


        if (count($user) == 1) {

            $datatime = date('Y-m-d');

            $res = DB::table('mly_sign')->where('user_id',$idstr)->whereBetween('created_at', [$datatime.' 00:00:00', $datatime.' 23:59:59'])->get();

           /* if (count($res) > 0) {
                return $this->apiReturn('1','今日已签到');
            }else{*/

                $sign = new MlySign;

                $sign->user_id = $idstr;
                $sign->sign_date = $datestr;
                $sign->created_at = date('Y-m-d h:i:s');

                if ($sign->save()) {

                    $result = DB::table('mly_user')->where('id',$idstr)->increment('integral', 10);

                    if ($result == 1) {

                        $jifen = (int)($user[0]->integral) + 10;

                        $signs = DB::table('mly_sign')->where('user_id',$idstr)->select('sign_date')->get();

                        $data['user_id'] = $idstr;
                        $data['type'] = 0;
                        $data['describe'] = '签到送积分';
                        $data['score'] = '10';
                        $data['create_time'] = date('Y-m-d h:i:s');

                        DB::table('mly_integral_record')->insert($data);

                        $tmpArr = array(

                            'integral'=>$jifen,
                            'signdate'=>$signs
                            );

                        return $this->apiReturn('0','签到成功',$tmpArr);

                    }else{

                        return $this->apiReturn('1','签到失败');
                    }

                }else{

                    return $this->apiReturn('1','签到失败');
                }
            // }

            }else{
                return $this->apiReturn('1','无此会员');
            }
        }


    /******************************************
    ****AuThor : 胡猛
    ****Title  : 获取积分
    *******************************************/
    public function getUserIntegral(Request $request)
    {
        if (!($request->has('userid'))) {

            return $this->apiReturn('1','参数错误');
        }


        $idstr = $request->get('userid');

        $jifen = MlyUser::find($idstr);
        $integral = $jifen->integral;
        $grade = 0;

        if($integral >= 0 && $integral <= 2000){
           $grade = 1;
       }else if($integral > 2000 && $integral <= 4000){
           $grade = 2;
       }else{
           $grade = 3;
       }

       $data = array(
           'integral'=>$integral,
           'grade'=>$grade
           );

       return $this->apiReturn('0','成功',$data);

   }

    /******************************************
    ****AuThor : 胡猛
    ****Title  : 获取积分
    *******************************************/
    public function getUserRank(Request $request)
    {
        $idstr = $request->get('userid');

        if (!$idstr) {
            return $this->apiReturn('1','参数错误');
        }

        $datas = DB::table('mly_user')->orderBy('integral','desc')->get();

        $count = count($datas);

        $jsonarr = object_to_array($datas);

        $j = 0;

        for ($i=0; $i < $count; $i++) { 

            $j++;

            if ($jsonarr[$i]['id'] == $idstr) {
                break;
            }
        }

        $arr = array();
        $k = 0;
        if($count <= 3)
           $k = $count;
       else
           $k = 3;

       for($i=0; $i < $k; $i++){

           $tmparr = array(

            'imgurl'=>$jsonarr[$i]['imgurl'],
            'nickname'=>$jsonarr[$i]['nickname'],
            'integral'=>$jsonarr[$i]['integral']
            );

           array_push($arr,$tmparr);
       }

       $data = array(
        'nums'=>$count,
        'rank'=>$j,
        'topthree'=>$arr
        );

       return $this->apiReturn('0','成功',$data);
   }



	/******************************************
    ****AuThor : 胡猛
    ****Title  : 签到
    *******************************************/
    public function getMemberRank()
    {
    	$datas = DB::table('mly_user')->orderBy('integral','desc')->get();

        $count = count($datas);

        $jsonarr = object_to_array($datas);

        $arr = array();

        for($i = 0;$i < $count;$i++){

           $tmp = array(
            'nickname'=>$jsonarr[$i]['nickname'],
            'imgurl'=>$jsonarr[$i]['imgurl'],
            'integral'=>$jsonarr[$i]['integral']
            );

           array_push($arr,$tmp);
       }

       return $this->apiReturn('0','成功',$arr);
   }


	/******************************************
    ****AuThor : 胡猛
    ****Title  : 分享
    *******************************************/
	public function shareMessage(Request $request)
	{
		if(!($request->has('sharetype'))){
			
			return $this->apiReturn('1','参数错误');
		}
		
		if (!($request->has('userid'))) {

            return $this->apiReturn('1','参数错误');
        }

        $sharetype = $request->get('sharetype');
        $idstr = $request->get('userid');

        $datatime = date('Y-m-d');

        $result = DB::table('mly_share')->where(['user_id'=>$idstr])->whereBetween('share_date', [$datatime.' 00:00:00', $datatime.' 23:59:59'])->get();

        DB::beginTransaction();

        $share = new MlyShare;
        $share->user_id = $idstr;
        $share->type = $sharetype;
        if($sharetype == '0'){
           $share->describe = '分享到微信好友';
       }else if($sharetype == '1'){
           $share->describe = '分享到微信朋友圈';
       }
       $share->share_date = date('Y-m-d h:i:s');

       if(count($result) <= 2){

           DB::table('mly_user')->where('id',$idstr)->increment('integral',5);
       }

       if($share->save()){
           DB::commit();
           return $this->apiReturn('0','分享成功');
       }else{
           DB::rollBack();
           return $this->apiReturn('1','分享失败');
       }
   }
    /******************************************
    ****AuThor : 胡猛
    ****Title  : 上传会员详细信息
    *******************************************/
    public function userDetail(Request $request)
    {
        $total = 0;

        if(!($request->has('userid'))){
            return $this->apiReturn('1','参数错误');
        }

        $tmpArr = array();
        
        $userid = $request->get('userid');
        
        $tmpArr['user_id'] = $userid;
        

        if($request->has('constellation')){
            $total += 5;
            $tmpArr['constellation'] = $request->get('constellation');
        }

        if($request->has('city')){
            $total += 5;
            $tmpArr['address'] = $request->get('city');
        }
        
        if($request->has('telphone')){

            $total += 5;
            $tmpArr['phone'] = $request->get('telphone');
        }
        
        if($request->has('sex')){
            $total += 5;
            $tmpArr['sex'] = $request->get('sex');
        }
        
        if($request->has('birthday')){
            $total += 5;
            $tmpArr['birthday'] = $request->get('birthday');
        }
        
        if($request->has('emotionl_state')){
            $total += 5;
            $tmpArr['emotionl_state'] = $request->get('emotionl_state');
        }

        $tmpArr['create_time'] = date('Y-m-d H:i:s');

        DB::beginTransaction();

        $phones=DB::table('mly_detail_info')->select('phone')->get();

        $phonesarrs=array();

        for ($i=0; $i < count($phones) ; $i++) { 

           $phonesarr = object_to_array($phones[$i])['phone'];

           array_push($phonesarrs,$phonesarr);
       }

       if(in_array($request->get('telphone'),$phonesarrs)){

          return $this->apiReturn('1','此手机号码已经注册');

      }

      try{

        $res = DB::table('mly_detail_info')->insert($tmpArr);

        if($res){

            $recorddata['user_id'] = $userid;

            $recorddata['type'] = 0;

            $recorddata['describe'] = '新手任务:完善信息';

            $recorddata['score'] = $total;

            $recorddata['create_time'] = date('Y-m-d H:i:s');

            $record = DB::table('mly_integral_record')->insert($recorddata);


            if($record){

                $user = DB::table('mly_user')->where('id',$userid)->increment('integral',$total);

                if($user == 1){

                    DB::commit();

                    return $this->apiReturn('0','成功');
                }else{

                    DB::rollBack();

                    return $this->apiReturn('1','失败');
                }
            }else{

                DB::rollBack();

                return $this->apiReturn('1','失败');
            }
        }else{
            DB::rollBack();

            return $this->apiReturn('1','失败');
        }

    }catch(\Exception $e){

        DB::rollBack();

        return $this->apiReturn('4','已提交过信息');
    }
}

	/******************************************
    ****AuThor : 胡猛
    ****Title  : 上传建议
    *******************************************/
	public function uploadSuggest(Request $request)
	{
		
		$idstr = $request->get('idstr');
		if(!$idstr){
			return $this->apiReturn('1','参数错误');
		}
		
		$suggestmess = $request->get('suggestmess');
		
		if(!$suggestmess){
			return $this->apiReturn('1','参数错误');
		}
		
		
		$suggestpic = $request->get('suggestpic');
		$suggestcomm = $request->get('suggestcomm');
		
		
		$picurl = '';
		
		if(count($suggestpic) > 0){
			
			foreach($suggestpic as $pic){
				
				$picurl .= saveBase64Image($pic);
				$picurl .= ';';
			}
		}				
		
		$data = array();
		$data['user_id'] = $idstr;
		$data['suggest_mess'] = $suggestmess;
		$data['suggest_pic'] = $picurl;
		$data['suggest_comm'] = $suggestcomm;
		$data['create_time'] = date('Y-m-d h:i:s');
		
		$res = DB::table('mly_suggest')->insert($data);
		
		if($res){
			
			return $this->apiReturn('0', '成功',count($suggestpic));

		}else{
			return $this->apiReturn('1', '失败');
		}
	}
	
	
	
	/******************************************
    ****AuThor : 胡猛
    ****Title  : 获取礼品
    *******************************************/
	public function getGifts()
	{
		$gift = DB::table('mly_product')->get();
		
		return $this->apiReturn('0','成功',object_to_array($gift));
	}
	
	
	
	
	/******************************************
    ****AuThor : 胡猛
    ****Title  : 提交礼品兑换交易
    *******************************************/
    public function giftTrade(Request $request)
    {
      $idstr = $request->get('userid');
      if(!$idstr){
       return $this->apiReturn('1','参数错误');
   }

   $giftname = $request->get('giftname');
   if(!$giftname){
       return $this->apiReturn('1','参数错误');
   }


   $giftid = $request->get('giftid');
   if(!$giftid){
       return $this->apiReturn('1','参数错误');
   }

   $giftnum = $request->get('giftnum');
   if(!$giftnum){
       return $this->apiReturn('1','参数错误');
   }


   $giftscore = $request->get('giftscore');
   if(!$giftscore){
       return $this->apiReturn('1','参数错误');
   }

   $userinfo = DB::table('mly_user')->where('id',$idstr)->select(['integral','consume_integral'])->first();


   $jifen = $giftscore * $giftnum;

   $jsoninfo = object_to_array($userinfo);

   $myjifen = $jsoninfo['integral'] - $jsoninfo['consume_integral'];


   if($myjifen - $jifen < 0){

       return $this->apiReturn('0','积分不够');
   }else{


       DB::beginTransaction();

       try{

        $data['userid'] = $idstr;
        $data['giftid'] = $giftid;
        $data['giftnum'] = $giftnum;
        $data['giftname'] = $giftname;
        $data['create_time'] = date('Y-m-d h:i:s');

        $res = DB::table('mly_exchange_record')->insert($data);

        if($res){

         DB::update("update mly_user set consume_integral = consume_integral+".$jifen." where id=".$idstr);


         $data1['user_id'] = $idstr;
         $data1['type'] = 1;
         $data1['describe'] = '兑换礼品';
         $data1['score'] = $jifen;
         $data1['num'] = $giftnum;
         $data1['create_time'] = date('Y-m-d h:i:s');

         $res1 = DB::table('mly_integral_record')->insert($data1);

         if($res1){
          DB::commit();
          return $this->apiReturn('0','兑换成功');
      }else{
          DB::rollBack();
          return $this->apiReturn('1','兑换失败');
      }
  }else{
     DB::rollBack();
     return $this->apiReturn('1','兑换失败');
 }

}catch(\Exception $e){
    DB::rollBack();
    return $this->apiReturn('1','兑换失败');
}
}
}



	/******************************************
    ****AuThor : 胡猛
    ****Title  : 获得积分交易
    *******************************************/
    public function getIntegralRecord(Request $request)
    {
      $idstr = $request->get('userid');
      if(!$idstr){
       return $this->apiReturn('1','参数错误');
   }

   $page = $request->get('page');


   $offset = 10 * $page;

   $records = DB::table('mly_integral_record')->where(['type'=>0,'user_id'=>$idstr])->offset($offset)->limit(10)->get();

   if ($records) {

       return $this->apiReturn('0','成功',object_to_array($records));
   }else{

       return $this->apiReturn('1','目前还没有获取积分',null);
   }
}


	/******************************************
    ****Title  : 兑换记录
    *******************************************/
    public function getExchangeRecord(Request $request)
    {

      $idstr = $request->get('userid');

      if(!$idstr){
       return $this->apiReturn('1','参数错误');
   }


   $page = $request->get('page');

   $offset = 10 * $page;

   $records = DB::table('mly_exchange_record')->where('userid',$idstr)->offset($offset)->limit(10)->get();

   if ($records) {

       return $this->apiReturn('0','成功',object_to_array($records));
   }else{

       return $this->apiReturn('1','目前还没有兑换记录',null);
   }
}


	/******************************************
    ****AuThor : 胡猛
    ****Title  : 医生点赞
    *******************************************/
    public function uploadThumbUp(Request $request)
    {
      $userid = $request->get('userid');
      if(!$userid){
       return $this->apiReturn('1','参数错误');
   }


   $res =  DB::update("update mly_doctor set num=num+1 where id =".$userid);

   if ($res) {

       $num = DB::table('mly_doctor')->where('id',$userid)->select('num')->first();

       return $this->apiReturn('0','成功',object_to_array($num));

   }else{
       return $this->apiReturn('1','');
   }

}


	/******************************************
    ****AuThor : 胡猛
    ****Title  : 医生点赞
    *******************************************/
    public function getDoctor()
    {
      $data = DB::table('mly_doctor')->select('num')->get();

      return $this->apiReturn('0','成功',object_to_array($data));
  }

	/**
	 ****AuThor : 陈晓龙
	 ****Title  : 商品收藏
	 */
	public function productionCollection(Request $request)
	{
		$idstr = $request->get('idstr');
		if(!$idstr){
			return $this->apiReturn('1','参数错误');
		}
		$user_id = $request->get('user_id');
		if(!$user_id) {
			return $this->apiReturn('1', '参数错误');
		}
		//是否进行收藏过
		$res=DB::table('mly_production_collection')->where('user_id',$user_id)->get();
		//判断是否为空
		if(!$res){
			DB::beginTransaction();
			$production=DB::table('mly_product')->where('id',$idstr)->get();
			//$idstr 商品id
			$collectiondata['pro_id'] = $production[0]->id;
			$collectiondata['type'] = $production[0]->type;
			$collectiondata['pro_describe'] = $production[0]->pro_describe;
			$collectiondata['pro_pic'] = $production[0]->pro_pic;
			$collectiondata['pro_name'] = $production[0]->pro_name;
			$collectiondata['user_id']=$user_id;
			$res=db::table("mly_production_collection")->insert($collectiondata);
			if($res){
				//收藏成功
				DB::commit();
                return $this->apiReturn('0','添加收藏成功');
            }else{
                DB::rollBack();
				//收藏失败
                return $this->apiReturn('1','添加收藏失败，请重新添加');
            }
        }else{
             //已经收藏过了
           DB::rollBack();
           return $this->apiReturn('1','已经收藏过了');
       }
   }

	/*
	 *心愿单接口
	 */
	

	public function wishList(){
		$wishpros=DB::table('mly_pro')->select('pro_name','pro_pic','id')->get();
		$tmp=(object_to_array($wishpros));
		if(count($tmp)){
			return $this->apiReturn("0",'返回成功',$tmp);
		}else{
			return $this->apiReturn("1",'暂无数据',$tmp);
		}
	}

	/**
	 *心愿单点赞接口
	 */
    public function wishListPraise(Request $request){
               //最多选择三个项目 只能点赞一次
      $userid=$request->get('userid');
      if(!$userid){
       return $this->apiReturn('1','参数错误');
   }
   $idstr=$request->get('idstr');
   if(!$idstr){
       return $this->apiReturn('1','参数错误');
   }
   $pros=DB::table('mly_wishlist')->where('user_id',$userid)->get();
   if(count($pros)==3){
       return $this->apiReturn('1','你添加的项目数已经到上限，不能添加');
   }
   $res=DB::table('mly_wishlist')->where('user_id',$userid)->select('pro_id')->get();
   if(count($res)==1){
       if(object_to_array($res)[0]['pro_id']==$idstr){
        return  $this->apiReturn('1','不能重复添加一个项目');
    }
}
if(count($res)==2){
   if(object_to_array($res)[0]['pro_id']==$idstr || object_to_array($res)[1]['pro_id']==$idstr){
    return  $this->apiReturn('1','不能重复添加一个项目');
}
}
DB::beginTransaction();
$data=array();
$data['pro_id']=$idstr;
$data['user_id']=$userid;
$data['create_time']=date('Y-m-d H:m:s');
$result=DB::table('mly_wishlist')->insert($data);
if($result){
    DB::commit();
    return $this->apiReturn('0','添加成功');
}else{
   DB::rollBack();
   return $this->apiReturn('1','添加失败');
}
}

    /**
     *整形百科的接口
     * 
     */
    public function plastic(){
        $plastic=DB::table('mly_plastic')->select('title','pic','content_summary','created_time','imglink')->get();
        $tmp=(object_to_array($plastic));
        if(count($tmp)){
            return $this->apiReturn("0",'返回成功',$tmp);
        }else{
            return $this->apiReturn("1",'暂无数据',$tmp);
        }
    }

	/******************************************
    ****AuThor : 胡猛
    ****Title  : 七夕活动濮阳
    *******************************************/
    public function uploadUserInfo(Request $request)
    {

      $userid=$request->get('userid');
//		if(!$userid){
//			return $this->apiReturn('1','参数错误');
//		}

      $project = $request->get('project');
      $phone = $request->get('phone');
      $chengji = $request->get('chengji');


//		$isjoin = DB::table('mly_qixi')->where('userid',$userid)->get();
//		
//		if(count($isjoin) > 2){
//
//			return $this->apiReturn('1','已参加过3次');
//		}else{
      $qixi = new MlyQiXi;
      $qixi->project = $project;
      $qixi->bushu = $chengji;
      $qixi->userid = $userid;
      $qixi->username = $request->get('username');
      $qixi->create_time = date('Y-m-d h:i:s');

      if($phone){
        $qixi->phonenum = $phone;
    }

    if($qixi->save()){

        $infos = DB::select("select distinct bushu from mly_qixi order by bushu desc");

        $jsoninfo = object_to_array($infos);

        $k = 1;

        for($i = 0;$i < count($jsoninfo);$i++){

         if($jsoninfo[$i]['bushu'] != $chengji){

           $k = $k + 1;
       }else{
        break;
    }
}


$arr = array(

 'id'=>$qixi->id,
 'maxnum'=>$jsoninfo[0]['bushu'],
 'paiming'=>$k
 );

return $this->apiReturn('0','成功',$arr);


}else{
    return $this->apiReturn('2','失败');
}	
//		}
}


	/******************************************
    ****AuThor : 胡猛
    ****Title  : 七夕活动驻马店
    *******************************************/
    public function uploadZMD(Request $request)
    {
      $userid=$request->get('userid');

      $project = $request->get('project');
      $phone = $request->get('phone');
      $chengji = $request->get('chengji');


      $qixi = new MlyZMDQiXi;
      $qixi->project = $project;
      $qixi->bushu = $chengji;
      $qixi->userid = $userid;
      $qixi->username = $request->get('username');
      $qixi->createtime = date('Y-m-d h:i:s');
      if($phone){
       $qixi->phonenum = $phone;
   }


   if($qixi->save()){

       $infos = DB::select("select distinct bushu from mly_zmdqixi order by bushu desc");

       $jsoninfo = object_to_array($infos);

       $k = 1;

       for($i = 0;$i < count($jsoninfo);$i++){

        if($jsoninfo[$i]['bushu'] != $chengji){

            $k = $k + 1;
        }else{
            break;
        }
    }


    $arr = array(

        'id'=>$qixi->id,
        'maxnum'=>$jsoninfo[0]['bushu'],
        'paiming'=>$k
        );

    return $this->apiReturn('0','成功',$arr);


}else{
   return $this->apiReturn('2','失败');
}	
}
    /******************************************
    ****AuThor : 胡猛
    ****Title  : 预约的接口
    *******************************************/
    public function appointment(Request $request){


      $userid=$request->get('idstr');

      if(!$userid){
       return $this->apiReturn('1','参数错误');
   } 
   $appointmentname=$request->get('appointmentname');
   if(!$appointmentname){
       return $this->apiReturn('1','参数错误');
   }
   $doctorid=$request->get('doctorid');
   if(!$doctorid){
       return $this->apiReturn('1','参数错误');
   }
   $proname=$request->get('proname');
   if(!$proname){
       return $this->apiReturn('1','参数错误');
   }
   $phone=$request->get('phone');
   if(!$phone){
       return $this->apiReturn('1','参数错误');
   }

           //没有id的情况
   $res=DB::table('mly_appointment')->where('userid',$userid)->get();

   if(!$res){

       DB::beginTransaction();

       try{

        $appointmentdate=array();
        $appointmentdate['userid']=$userid;
        $doctorname=DB::table('mly_doctor')->where('id',$doctorid)->select('name')->get();
        $doctorname=object_to_array($doctorname)[0]['name'];
        $appointmentdate['doctorname']=$doctorname;
        $appointmentdate['proname']=$proname;
        $appointmentdate['phone']=$phone;
        $appointmentdate['create_time']=date('Y-m-d H:m:s');
        $appointmentdate['appointmentstatus']=1;
        $appointmentdate['appointmentname']=$appointmentname;
        $appointmentdate['doctorid']=$doctorid;

        $result=DB::table('mly_appointment')->insert($appointmentdate);

        if($result){

           $doctorid = DB::table('mly_appointment')->where('userid',$userid)->select('doctorid')->get();

           DB::commit();

           return $this->apiReturn('0','预约成功,稍后会电话联系您',$doctorid);

       }else{

           DB::rollBack();

           return $this->apiReturn('1','预约失败，请重新预约');
       }

   }catch(\Exception $e){

    DB::rollBack();

    return $this->apiReturn('1','预约失败，请重新预约');
}

}else{
   //有id的情况

 $appointmentdate=array();
 $doctorname=DB::table('mly_doctor')->where('id',$doctorid)->select('name')->get();
 $doctorname=object_to_array($doctorname)[0]['name'];
 $appointmentdate['doctorname']=$doctorname;
 $appointmentdate['proname']=$proname;
 $appointmentdate['phone']=$phone;
 $appointmentdate['create_time']=date('Y-m-d H:m:s');
 $appointmentdate['appointmentstatus']=1;
 $appointmentdate['appointmentname']=$appointmentname;
 $appointmentdate['doctorid']=$doctorid;

 $res = DB::table('mly_appointment')->where('userid',$userid)->update($appointmentdate);

 if($res){

    $doctorid = DB::table('mly_appointment')->where('userid',$userid)->select('doctorid')->get();

    return $this->apiReturn('0','预约成功,稍后会电话联系您',$doctorid);

}else{

   return $this->apiReturn('1','预约失败，请重新预约');
}

}

}

     // 取消预约接口
public function cancelappointment(Request $request){

    $id = $request->get('idstr');

    DB::beginTransaction(); 

    $tmp=array();

    $tmp['appointmentstatus'] = 0;

    $res = DB::table('mly_appointment')->where('userid',$id)->update($tmp);

    if($res){

        $doctorid = DB::table('mly_appointment')->where('userid',$id)->select('doctorid')->get();

        DB::commit();

        return $this->apiReturn('0','取消预约成功',$doctorid);

    }else{

       DB::rollBack();

       return $this->apiReturn('1','取消预约失败');
   }
}

     // 预约信息回显接口
public function appointmentdoctor(Request $request){

    $id = $request->get('idstr');

    $res = DB::table('mly_appointment')->where('userid',$id)->select('appointmentstatus')->get();

    if($res){

       $res=object_to_array($res);

       $res=$res[0]['appointmentstatus'];

       if($res==1){

          $doctorid = DB::table("mly_appointment")->where('userid',$id)->select('doctorid')->get();

           return $this->apiReturn('0','返回成功',$doctorid);

        }else{
            
          return $this->apiReturn('1','当前还没有预约记录');
       
        }
    }else{

         return $this->apiReturn('1','当前还没有预约记录');
    }
  }
}