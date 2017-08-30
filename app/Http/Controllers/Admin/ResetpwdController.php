<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\AdminUser;
use DB;


class ResetpwdController extends Controller
{
	////$2y$10$QVuBezG4C0yrSBLl0WDTD.MwVrSvncqLbBl138e/WmxcojsSUtUFa   yG67TIFizTxDhOZNk0Q1lcQAz5tuaueKHDAYjKyCxufxdnWm2jqS00QJ0pNO
	
	public function index()
	{
		return view('admin.resetpwd.index');
	}
	
	
	public function setPassword(Request $request)
	{
		$this->validate($request, [
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
		
		
		$username = $request->get('name');
		
		$info = DB::table('admin_users')->where('name',$username)->select('name','password')->first();
		
		if($info){
			
			$res = DB::table('admin_users')->where('name',$username)->update(['password'=>bcrypt($request->get('password'))]);
			
			if(count($res) > 0){

				return redirect('/admin/login')->withSuccess('修改成功');
			}else{
				return redirect()->back()->withErrors('修改失败');
			}
			
		}else{
			return redirect()->back()->withErrors('不存在此用户');
		}
	}
}
  