<?php

header("Content-type:text/html;charset=utf-8");

function p($data){
    // 定义样式
    $str='<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #F5F5F5;border: 1px solid #CCC;border-radius: 4px;">';
    // 如果是boolean或者null直接显示文字；否则print
    if (is_bool($data)) {
        $show_data=$data ? 'true' : 'false';
    }elseif (is_null($data)) {
        $show_data='null';
    }else{
        $show_data=print_r($data,true);
    }
    $str.=$show_data;
    $str.='</pre>';
    echo $str;
}

function random($length = 6 , $numeric = 0) {

    PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
    
    if($numeric) {
        $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
    } else {
        $hash = '';
        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
        $max = strlen($chars) - 1;
        for($i = 0; $i < $length; $i++) {
            $hash .= $chars[mt_rand(0, $max)];
        }
    }
    return $hash;
}



function apiReturn($status,$message)
{

	$data['status'] = $status;
	$data['message'] = $message;
	
	return $data;
}


function returnInfo($status,$message,$list)
{
	$msg_array['status'] = $status;
	$msg_array['info'] = $message;
	$msg_array['is_reload'] = 0;
	$msg_array['curl'] = '';
	$msg_array['resource'] = $list;
	
	return $msg_array;
}

function uploadPic($file)
{
	//检验一下上传的文件是否有效
	$clientName = $file -> getClientOriginalName();
	//缓存在tmp文件夹中的文件名
	//$tmpName = $file ->getFileName();
	//这个表示的是缓存在tmp文件夹下的文件的绝对路径
	//$realPath = $file -> getRealPath();
	//上传文件的后缀
	$entension = $file -> getClientOriginalExtension();
	//$mimeTye = $file -> getMimeType();
	
	$realname = date('Ymdhis').'.'.$entension;
	$file -> move('storage/uploads',$realname);
	
	return $realname;
}




/***********************************
 * 方法名： 获取当前控制器名  
 ***********************************/ 
function getCurrentControllerName() 
{  
	$fullname=getCurrentAction()['controller'];
	
//	switch ($group) 
//	{
//		case 'Admin':
//			$string = substr($fullname, 27);
//			$string = str_replace("Controller", "", $string);
//			break;
//		case 'User':
//			$string = substr($fullname, 26);
//			$string = str_replace("Controller", "", $string);
//			break;	
//		case 'Home':
//			$string = substr($fullname, 21);
//			$string = str_replace("Controller", "", $string);
//			break;
//		default:
			$string = substr($fullname, 26);
			$string = str_replace("Controller", "", $string);
//			break;
//	}
    return $string;  
} 



/***********************************
 * 方法名： 获取当前控制器与方法 
 ***********************************/ 
function getCurrentAction()  
{  
	if(\Route::getCurrentRoute())
	{
		$action = \Route::getCurrentRoute()->getActionName();
	}
	else
	{
		$data=\Request::route()->getAction();
		$action = $data['controller'];
	}
      
    list($class, $method) = explode('@', $action);  
	
    return ['controller' => $class, 'method' => $method];  
} 





function saveBase64Image($base64_image_content){

    if (preg_match('/^(data:\s*image\/(\w+);base64,)/',$base64_image_content, $result)){

        $type = $result[2];

        $image_name=date('His').str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT).".".$type;

        $image_url = '/uploads/'.date('Ymd').$image_name;    

        if(!is_dir(dirname('.'.$image_url))){

            mkdir(dirname($image_url));
            chmod(dirname($image_url), 0777);
        }
		

        $decode=base64_decode(str_replace($result[1], '', $base64_image_content));

        if (file_put_contents('.'.$image_url, $decode)){

            return ('http://47.93.217.112/shoph/1/mly/public/uploads/'.date('Ymd').$image_name);
                
        }else{
            return '';
        }
    }else{
        return '11';
    }       
}




function object_to_array($obj){

    $_arr=is_object($obj)?get_object_vars($obj):$obj;

    foreach($_arr as $key=>$val){

        $val=(is_array($val))||is_object($val)?object_to_array($val):$val;

        $arr[$key]=$val;

    }

    return $arr;
}
