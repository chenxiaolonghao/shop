<?php

namespace App\Http\Controllers\Good;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use DB;

class CouponController extends Controller
{
	public function index()
	{
		$coupons = DB::table('mly_coupon')->paginate(10);
		
		return view('coupon.index',compact('coupons'));
	}
	
	
	public function create(Request $request)
	{
		if($request->isMethod('post')){
			
			$miaoshu = $request->get('miaoshu');
			if(!$miaoshu){
				return redirect()->back()->withErrors('请输入描述');
			}
			
			$num = $request->get('num');
			if(!$num){
				return redirect()->back()->withErrors('请输入发布多少张');
			}
			if(!is_numeric($num)){
				return redirect()->back()->withErrors('只能输入数字');
			}
			
			$reservation = $request->get('reservation');
			if(!$reservation){
				return redirect()->back()->withErrors('请选择有效期');
			}
			
			$discountnum = '';
			$discount = $request->get('discount');
			
			if($discount == '9.8折'){
				$discountnum = '98';
			}else if($discount == '9.5折'){
				$discountnum = '95';
			}else if($discount == '9.0折'){
				$discountnum = '90';
			}else if('8.5折'){
				$discountnum = '85';
			}
			
			$data = array(
				'describe'=>$miaoshu,
				'number'=>$num,
				'expirydate'=>$reservation,
				'discount'=>$discountnum,
				'create_time'=>date('Y-m-d h:i;s')
			);
			
			$res = DB::table('mly_coupon')->insert($data);
			
			if($res){
				return redirect('good/coupon/index')->withSuccess('发布成功');
			}else{
				return redirerct()->back()->withErrors('发布失败');
			}
		}	
		return view('coupon.create');
	}


	public function delete()
	{
		$idstr = Input::get('idstr');
		
		$result = DB::table('mly_coupon')->where('id',$idstr)->delete();
		
		if($result){
			return apiReturn(0,'删除成功');
		}else{
			return apiReturn(1,'删除失败');
		}
	}
	
	
	public function update($id)
	{
		$coupon = DB::table('mly_coupon')->find($id);
		
		return view('coupon.update',compact('coupon'));
	}
}
