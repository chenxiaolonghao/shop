<?php

namespace App\Http\Controllers\Good;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\MlyProduct;
use DB;

use App\Http\Controllers\PublicController;




class IndexController extends PublicController
{
    public function index()
    {
    	$website = $this->website;
		
		$website['modelname'] = getCurrentControllerName();
		$website['cursitename'] = '商品';
		$website['way']='gift_name';
		$wayoption[] = array('text'=>'商品名','value'=>'gift_name');
		
		$website['wayoption'] = json_encode($wayoption);
			
        return view('good.index',compact('website'));
    }
	
	
	public function api_list()  
	{
		$list = DB::table('mly_product')->orderBy('id','desc')->paginate($this->pagesize);
		
		\Session::put('goodlist',$list,10);
		
		if($list && $list->total() > 0)
		{
			
			$msg_array['status'] = '1';
			$msg_array['info'] = '成功';
			$msg_array['is_reload'] = 0;
			$msg_array['curl'] = '';
			$msg_array['resource'] = $list;
			
		}
		else
		{
			$msg_array['status'] = '1';
			$msg_array['info'] = '失败';
			$msg_array['is_reload'] = 0;
			$msg_array['curl'] = '';
			$msg_array['resource'] = $list;
		}
		
		return response()->json($msg_array);
	}
	
	
	public function create()
	{		
		return view('good.addPro');
	}
	
	
	public function addPro()
	{

		$file = Input::file('picture');
		
		$path = 'http://chenxiaolong.top/shoph/1/mly/public/storage/uploads/'.(uploadPic($file));
		
		DB::beginTransaction();
		
		try{
			
			$pro = new MlyProduct;
			$pro->gift_name = Input::get('proname');
			$pro->gift_describe = Input::get('prodes');
			$pro->gift_pic = $path;
			$pro->exchange_integral = Input::get('exchange');
			$pro->type = 0;
			
			if($pro->save()){
				
				DB::commit();
				
				$tmp['status'] = 0;
	        	$tmp['message'] = '新增成功';
	            return $tmp;
				
			}else{
				
				DB::rollback();
				$tmp['status'] = 1;
	        	$tmp['message'] = '新增失败';
	            return $tmp;
			}
		}catch(\Exception $e){
			DB::rollback();
			
			$tmp['status'] = 1;
	        $tmp['message'] = '新增失败';
	        return $tmp;
		}
	}


	public function edit($id)
	{
		$goodlist = \Session::get('goodlist');
		$onepro = null;
		
		if($goodlist){
			foreach($goodlist as $list){
				if($list->id == $id){
					$onepro = $list;
					break;
				}
			}	
		}else{
			$onepro = MlyProduct::find($id);		
		}
	
		\Session::put('proid',$id);  
		
		return view('good.proedit')->with('onepro',$onepro);
	}
	
	public function editPro()
	{
		$oldname = Input::get('proname1');
		$newname = Input::get('proname');
		
		$olddes = Input::get('prodes1');
		$newdes = Input::get('prodes');
		
		$oldexchange = Input::get('exchange1');
		$newexchange = Input::get('exchange');
		
		$pic = Input::file('picture');
	
		$proid = \Session::get('proid');
		
		if($oldname == $newname && $olddes == $newdes && $oldexchange == $newexchange && $pic == null){
			
	        return apiReturn(0, '数据无变化,无需更新');
			
		}else{
			
			if($oldname != $newname){
				
				$data['gift_name'] = $newname;
			}
			
			if($olddes != $newdes){
				$data['gift_describe'] = $newdes;
			}
			
			if($oldexchange != $newexchange){
				$data['exchange_integral'] = $newexchange;
			}
			
			if($pic){
				
				$path = 'http://humeng.ngrok.cc/laravel/1/mly/public/storage/uploads/'.(uploadPic($pic));
				$data['gift_pic'] = $path;
			}
			
			$res = DB::table('mly_product')->where('id',$proid)->update($data);
			
			if(count($res) > 0){
			
				return apiReturn(0, '更新成功');

			}else{
				return apiReturn(1, '更新失败');
			}
		}
	}
}
