@extends('admin.layouts.layerHead')

@section('content')

	
	<form class="form-horizontal" action="" role="form" method="POST" id="do_form" name="do_form">
		{{ csrf_field() }}
	
		<div class="form-group" style="display: none;">
			<label for="tag" class="col-md-3 control-label">ID</label>
			<div class="col-md-5">
				<input type="text" class="form-control required" name="idstr" value="{{$coupon->id}}" autofocus>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-3">打折:</label>
			<div class="col-md-5">
				<input type="text" class="form-control required" name="idstr" value="{{$coupon->discount}}折" autofocus disabled="true">
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="col-md-3">优惠券描述:</label>
			<div class="col-md-5">
				<textarea class="form-control" placeholder="请输入优惠券描述" name="miaoshu" id="miaoshu">{{$coupon->describe}}</textarea>
			</div>
		</div>
		
	</from>
@endsection

@section('js')	


@endsection