<?php

namespace App\Http\Controllers\Plastic;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;
use App\Models\MlyPlastic;
use DB;
use Illuminate\Support\Facades\Input;

class IndexController extends PublicController
{

  	public function index()
  	{
      	$plastics = DB::table('mly_plastic')->orderBy('id','desc')->paginate(10);

     	 return view('plastic.index', compact('plastics'));
 	}



    public function create(Request $request){

    	if($request->isMethod('post')){

    		$file = Input::file('pic');
		    $path = 'http://chenxiaolong.top/shoph/1/mly/public/storage/uploads/' . (uploadPic($file));
		    DB::beginTransaction();
		        try {
		            $data = new MlyPlastic();
		            $data->title = Input::get('title');
		            $data->content_summary = Input::get('content_summary');
		            $data->pic = $path;
		            $data->created_time=date("Y-m-d h:i:s");
		            $data->imglink = Input::get('imglink');
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

       	return view('plastic.create');
    }

	public function edit($id)
	{	

		$plastics=DB::table('mly_plastic')->find($id);
     
		return view('plastic.edit',compact('plastics'));
	}


//修改礼物的方法
	public function update()
	{
	    $file = Input::file('pic');
	    $title=Input::get('title');
	    $title1=Input::get('title1');
	    $content_summary=Input::get('content_summary');
	    $content_summary1=Input::get('content_summary1');
	    $imglink=Input::get('imglink');
	    $imglink1=Input::get('imglink1');

	    if($file==null){
	        if($title==$title1 && $content_summary==$content_summary1 && $imglink==$imglink1){
	            return apiReturn(0, '数据无变化,无需更新');
	        }
	        if($title!=$title1 || $content_summary!=$content_summary1 || $imglink!=$imglink1){
	            DB::beginTransaction();
	            try {
	               $data = array();
	                $id = Input::get('id');
	                $data['title'] = Input::get('title');
	                $data['content_summary'] = Input::get('content_summary');
	                $data['imglink'] = Input::get('imglink');
	                $res = DB::table('mly_plastic')->where('id', $id)->update($data);
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
	            $data['title'] = Input::get('title');
	            $data['content_summary'] = Input::get('content_summary');
	            $data['imglink'] = Input::get('imglink');
	            $data['pic'] = $path;
	            $data['created_time']=date('Y-m-d h:i:s');
	            $res = DB::table('mly_plastic')->where('id', $id)->update($data);
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
         $result = DB::table('mly_plastic')->where('id',$idstr)->delete();

         if($result){
           return apiReturn(0,'删除成功');
         }else{
            return apiReturn(1,'删除失败');
         }
    }
}
