<?php

namespace App\Http\Controllers\Activity;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;

class ActivityController extends Controller
{
    public function index()
    {
    	
		$where = '';
		
		$qixi = DB::table('mly_qixi')->where('username', 'like', '%'.$where.'%')->paginate(10);
		
    	return view('activity.qixi',compact('qixi'));
    }
}
