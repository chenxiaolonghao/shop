@extends('admin.layouts.base')

@section('title','控制面板')

@section('pageHeader','控制面板')

@section('pageDesc','DashBoard')

@section('content')
	
	<div class="row">
    	<div class="col-xs-12">
      		<div class="box" id="app-content">
        		<div class="box-header">
		        	<h3 class="box-title">
		            @include('admin.include.button-add')
		          	</h3>
        		</div>
        		
        		@include('admin.partials.errors')
				@include('admin.partials.success')
						
        		<div class="layui-form" style="margin-left: 10px;margin-right: 10px;">
   					<table class="layui-table">
						<colgroup>
							<col width="50">
							<col width="150">
							<col width="150">
							<col width="150">
							<col width="150">
							<col width="150">
						</colgroup>
						<thead>
							<tr>
							    <th>id</th>
							    <th>商品名称</th>
							    <th>商品描述</th>
							    <th>缩略图</th>
							    <th>兑换积分</th>
							    <th>操作</th>
							</tr> 
						</thead>
						<tbody>
							@include('admin.include.fieldvalue.v-for')
				                <td>@{{ item.id }}</td>
				                <td>@{{ item.gift_name }}</td>
				                <td>@{{ item.gift_describe }}</td>
				                <td>
				                	<img style="width: 100px;height: 100px;" v-bind:src = item.gift_pic />
				                </td>
				                <td>@{{ item.exchange_integral }}</td>
				                
				                <td>
				                  <div class="tools">
				                     @include('admin.include.fieldvalue.optionedit')
				                  </div>
				                </td>
			              	</tr>
						</tbody>
  					</table>
  					@include('admin.include.pages')
				</div>
				
        	</div>
        </div>
    </div>
	
	
@endsection


@section('js')

	<script>
		
		new Vue({
		    @include('admin.include.vue-el')
		    data: {
		        apiurl_list          :"{{ url('good/index/api_list') }}",
		        linkurl_add          :"{{ url('good/index/create') }}",
		        linkurl_edit         :'{{ url("good/index/edit") }}/',
		        @include('admin.include.vue-pages-dataitems')
             	@include('admin.include.vue-pages-pageparams')
             	@include('admin.include.vue-pages-paramsdata')
		    },
		   	@include('admin.include.vue-ready')
		    @include('admin.include.vue-pages-computed')
		    methods: {
		            @include('admin.include.vue-methods-action_list_get')
		            @include('admin.include.vue-methods-action_list_do')
		            @include('admin.include.vue-methods-action_list_search')
		            @include('admin.include.vue-methods-action_info_return')
		            @include('admin.include.vue-methods-link_click_add')
		            @include('admin.include.vue-methods-link_click_edit')
		            @include('admin.include.vue-methods-link_click_page')  
		    }            
		})
	</script>

@endsection