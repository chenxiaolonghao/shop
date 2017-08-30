<?php

namespace App\Http\Controllers\Appointment;

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
  		//项目  预约时间 医生 预约电话  预约人姓名
  		
      	$appointments = DB::table('mly_appointment')->where('appointmentstatus',1)->select('doctorname','id','proname','phone','appointmentname')->orderBy('id','desc')->paginate(10);

     	return view('appointment.index', compact('appointments'));
 	}

	public function edit($id)
	{	

		$appointments=DB::table('mly_appointment')->find($id);
     
		return view('appointment.edit',compact('appointments'));
	}


//修改礼物的方法
	public function update()
	{
	    $appointmenttime=Input::get('appointmenttime');
	    $appointmenttime1=Input::get('appointmenttime1');

	        if($appointmenttime==$appointmenttime1){
	            return apiReturn(0, '数据无变化,无需更新');
	        }
	        if($appointmenttime!=$appointmenttime1){
	            DB::beginTransaction();
	            try {
	                $data = array();
	                $id = Input::get('id');
	                $data['appointmenttime'] = Input::get('appointmenttime');
	                $res = DB::table('mly_appointment')->where('id', $id)->update($data);
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
	            }catch (\Exception $e) {
	                DB::rollback();
	                $tmp['status'] = 1;
	                $tmp['message'] = '修改失败';
	                return $tmp;
	            }
	        }
	    }
     //删除礼物的方法
    public function delete(){
         $idstr = Input::get('idstr');
         $result = DB::table('mly_appointment')->where('id',$idstr)->delete();

         if($result){
           return apiReturn(0,'删除成功');
         }else{
            return apiReturn(1,'删除失败');
         }
    }
}
