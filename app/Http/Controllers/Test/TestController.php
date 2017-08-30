<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use DB;

class TestController extends Controller
{
    public function index($id)
	{
		
		$user = DB::table('mly_user')->where('id',$id)->first();
		
		$detail = DB::table('mly_detail_info')->where('user_id',$id)->first();
		
		return view('test.index',compact('user','detail'));
	} 
}
