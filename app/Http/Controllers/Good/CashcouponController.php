<?php

namespace App\Http\Controllers\Good;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\MlyCashCoupon;
use DB;

class CashcouponController extends Controller
{
    
    public function index()
    {	

    	$coupons = DB::table('mly_cash_coupon')->paginate(15);

    	return view('good.cashcoupon')->with('coupons',$coupons);
    }



    public function create(Request $request)
    {
    	if($request->isMethod('post')){
    		
			$file = Input::file('picture');
			
			DB::beginTransaction();
			
			try{
			
				$path = 'http://humeng.ngrok.cc/laravel/1/mly/public/storage/uploads/'.(uploadPic($file));
				
				$cash = new MlyCashCoupon;
				$cash->cash_coupon_name = Input::get('couponname');
				$cash->exchange_integral = Input::get('jifen');
				$cash->describe = Input::get('miaoshu');
				$cash->number = Input::get('num');
				$cash->type = 0;
				$cash->pic = $path;
				
				if ($cash->save()) {
	  				
					DB::commit();
					
		            return apiReturn(0, '发布成功');
	
	  			}else{
	
					DB::rollBack();
					return apiReturn(1, '发布失败');
	  			}
				
			}catch (\Exception $e){
				
				DB::rollBack();
				
				return apiReturn('1', '发布失败');
			}
		}
		
    	return view('good.create');
    }

}
