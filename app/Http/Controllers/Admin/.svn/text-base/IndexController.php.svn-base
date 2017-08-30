<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MlyUser;
use DB;


class IndexController extends Controller
{
    public function index()
    {

		$users = DB::table('mly_user')->get();
		
		$nowdate = date('Y-m-d');
		$num = 0;
		
		for ($i = 0; $i < count($users); $i++) {
			
			$date = floor((strtotime($users[$i]->create_time)-strtotime($nowdate))/86400);
			
			if($date == 0){
				
				$num += 1;
			}
		} 
		
		$total = count($users);
		
        return view("admin.Index.index",compact('num','total'));
    }
    
}
