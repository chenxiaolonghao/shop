<?php

namespace App\Http\Controllers\Project;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;
use App\Models\MlyPro;
use DB;
use Illuminate\Support\Facades\Input;

class IndexController extends PublicController
{

  	public function index()
  	{
      	$gifts = DB::table('mly_pro')->orderBy('id','desc')->paginate(10);

     	 return view('project.index', compact('gifts'));
 	}



    public function create(Request $request){

    	if($request->isMethod('post')){

    		$file = Input::file('picture');
		    $path = 'http://chenxiaolong.top/shoph/1/mly/public/storage/uploads/' . (uploadPic($file));
		    DB::beginTransaction();
		        try {
		            $data = new MlyPro();
		            $data->pro_name = Input::get('pro_name');
		            $data->type = Input::get('type');
		            $data->pro_pic = $path;
		            $data->created_time=date("Y-m-d h:i:s");
		            $res = $data->save();
		            if ($res) {
		                //新增成功
		                DB::commit();
		                $tmp['status'] = 0;
		                $tmp['message'] = '新增成功';
		                return $tmp;
		            } else {
		                //新增失败
		                DB::rollback();
		                $tmp['status'] = 1;
		                $tmp['message'] = '新增失败';
		                return $tmp;
		            }
		        }catch(\Exception $e){
		            DB::rollback();
		            $res=$data->save();
		            var_dump($res);
		            $tmp['status']=2;
		            $tmp['message']='新增失败';
		            return $tmp;
		        }
    	}

       	return view('project.create');
    }

	public function edit($id)
	{	

		$gift=DB::table('mly_pro')->find($id);
     
		return view('project.edit',compact('gift'));
	}


//修改礼物的方法
	public function update()
	{
	    $file = Input::file('pro_pic');
	    $pro_name=Input::get('pro_name');
	    $pro_name1=Input::get('pro_name1');
	    $type=Input::get('type');
	    $type1=Input::get('type1');

	    if($file==null){
	        if($pro_name==$pro_name1 && $type==$type1){
	            return apiReturn(0, '数据无变化,无需更新');
	        }
	        if($pro_name!=$pro_name1 || $type!=$type1){
	            DB::beginTransaction();
	            try {
	               $data = array();
	                $id = Input::get('id');
	                $data['pro_name'] = Input::get('pro_name');
	                $data['type'] = Input::get('type');
	                $res = DB::table('mly_pro')->where('id', $id)->update($data);
	                if ($res) {
	                    //修改成功
	                    DB::commit();
	                    $tmp['status'] = 0;
	                    $tmp['message'] = '修改成功';
	                    return $tmp;
	                } else {
	                    //修改失败
	                    DB::rollback();
	                    $tmp['status'] = 1;
	                    $tmp['message'] = '修改失败';
	                    return $tmp;
	                }
	            } catch (\Exception $e) {
	                DB::rollback();
	                $tmp['status'] = 2;
	                $tmp['message'] = '修改失败';
	                return $tmp;
	            }
	        }
	    }
	    if($file!=null) {
	        $path = 'http://chenxiaolong.top/shoph/1/mly/public/storage/uploads/' . (uploadPic($file));
	        DB::beginTransaction();
	        try {
	            $data = array();
	            $id = Input::get('id');
	            $data['pro_name'] = Input::get('pro_name');
	            $data['type'] = Input::get('type');
	            $data['pro_pic'] = $path;
	            $res = DB::table('mly_pro')->where('id', $id)->update($data);
	            if ($res) {
	                //修改成功
	                DB::commit();
	                $tmp['status'] = 0;
	                $tmp['message'] = '修改成功';
	                return $tmp;
	            } else {
	                //修改失败
	                DB::rollback();
	                $tmp['status'] = 1;
	                $tmp['message'] = '修改失败';
	                return $tmp;
	            }
	        } catch (\Exception $e) {
	            DB::rollback();
	            $tmp['status'] = 2;
	            $tmp['message'] = '修改失败';
	            return $tmp;
	        }
	       }
	    }
     //删除礼物的方法
    public function delete(){
        $idstr = Input::get('idstr');
         $result = DB::table('mly_pro')->where('id',$idstr)->delete();

         if($result){
           return apiReturn(0,'删除成功');
         }else{
            return apiReturn(1,'删除失败');
         }
    }
}
