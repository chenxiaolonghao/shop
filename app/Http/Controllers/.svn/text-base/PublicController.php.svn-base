<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicController extends Controller
{
	protected $website;
	
	
	public function __construct()
	{
		//常量定义
		$this->pagesize = $pagesize = env('APP_ADMIN_PAGE_SIZE');//分页
		
		//记录是否有新数据加入
		$this->isadd = $isadd = 0;
		$this->datamodel = $datamodel = null;
	}
}
