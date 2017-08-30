<?php

namespace App\Http\Controllers\Good;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;
use App\Models\MlyTicket;

class TicketController extends Controller
{
	public function index()
	{
		
		$tickets = DB::table('mly_ticket')->paginate(10);
		
		return view('ticket.index',compact('tickets'));
	}	
	
	
	
	public function create(Request $request)
	{
		if($request->has('jifen-type')){
			
			$reservation = $request->get('reservation');
			if(!$reservation){
				
				return redirect()->back()->withErrors('请选择日期');
			}
			
			$miaoshu = $request->get('miaoshu');
			if(!$miaoshu){
				return redirect()->back()->withErrors('请输入积分券描述');
			}
			
			$data = array();
				
			$jifentype = $request->get('jifen-type');
			if($jifentype == '等级积分券')
				$data['type'] = 0;
				
			$data['describe'] = $miaoshu;
			$data['integral'] = $request->get('jifen');
			$data['validity_period'] = $request->get('reservation');
			$data['create_time'] = date('Y-m-d h:i:s');
			
			$result = DB::table('mly_ticket')->insert($data);
			
			if($result){
				
				return redirect('good/ticket/index')->withSuccess('新增成功！');
				
			}else{
				return redirect()->back()->withErrors('新增失败');
			}
		}
		return view('ticket.create');
	}
	
	
	public function delete()
	{
		$idstr = Input::get('idstr');
		
		$result = DB::table('mly_ticket')->where('id',$idstr)->delete();
		
		if($result){
			return apiReturn(0,'删除成功');
		}else{
			return apiReturn(1,'删除失败');
		}
	}
	
	
	public function detail($id)
	{	
		$ticket = DB::table('mly_ticket')->where('id',$id)->first();
		return view('ticket.detail',compact('ticket'));
	}
	
	public function update()
	{
		$ticket = MlyTicket::find(Input::get('idstr'));
		
		$ticket->describe = Input::get('miaoshu');
		$ticket->integral = Input::get('jifen');
		$ticket->update_time = date('Y-m-d h:i:s');
		
		$jifentype = Input::get('jifen-type');
		if($jifentype == '等级积分券'){
			$ticket->type = 0;
		}
		
		$ticket->validity_period = Input::get('starttime').'-'.Input::get('endtime');
		
		if($ticket->save()){
			return apiReturn('0', '更新成功');	
		}else{
			return apiReturn('1', '更新失败');	
		}
	}
}
	
	

	
	
	
//$phpword = new \PHPWord();
//
//      //设置默认样式
//      $phpword->setDefaultFontName('仿宋');//字体
//      $phpword->setDefaultFontSize(16);//字号
//
//      //添加页面
//      $section = $phpword->createSection();
//
//      //添加目录
//      $styleTOC  = ['tabLeader' => \PHPWord_Style_TOC::TABLEADER_DOT];
//      $styleFont = ['spaceAfter' => 60, 'name' => 'Tahoma', 'size' => 12];
//      $section->addTOC($styleFont, $styleTOC);
//
//      //默认样式
//      $section->addText('aaaa第一行文字第一行文字第一行文字第一行文字aaaa');
//      $section->addTextBreak();//换行符
//
//      //指定的样式
//      $section->addText(
//          'Hello world! 第二行文字第二行文字第二行文字.',
//          [
//              'name' => '宋体',
//              'size' => 16,
//              'bold' => true,
//          ]
//      );
//      $section->addTextBreak(5);//多个换行符
//
//      //自定义样式
//      $myStyle = 'myStyle';
//      $phpword->addFontStyle(
//          $myStyle,
//          [
//              'name' => 'Verdana',
//              'size' => 12,
//              'color' => '1BFF32',
//              'bold' => true,
//              'spaceAfter' => 500,
//          ]
//      );
//      $section->addText('第三行文字第三行文字', $myStyle);
//      $section->addText('第四行文字', $myStyle);
//      $section->addPageBreak();//分页符
//
//      //添加文本资源
//      $textrun = $section->createTextRun();
//      $textrun->addText('I am bold', ['bold' => true]);
//      $textrun->addText('I am italic', ['italic' => true]);
//      $textrun->addText('I am colored', ['color' => 'AACC00']);
//
//      //列表
//      $listStyle = ['listType' => \PHPWord_Style_ListItem::TYPE_NUMBER];
//      $section->addListItem('河北省', 0, null, $listStyle);
//      $section->addListItem('石家庄', 1, null, $listStyle);
//      $section->addListItem('邯郸', 1, null, $listStyle);
//      $section->addListItem('魏县', 2, null, $listStyle);
//      $section->addListItem('河南省', 0, null, $listStyle);
//      $section->addListItem('郑州', 1, null, $listStyle);
//      $section->addListItem('信阳', 1, null, $listStyle);
//
//      //超级链接
//      $linkStyle = ['color' => '0000FF', 'underline' => \PHPWord_Style_Font::UNDERLINE_SINGLE];
//      $phpword->addLinkStyle('mylinkStyle', $linkStyle);
//      $section->addLink('http://www.baidu.com', '百度', 'mylinkStyle');
//      $section->addLink('http://www.lanrenkaifa.com', null, 'mylinkStyle');
//
//      //添加图片
//      $imageStyle = ['width' => 350, 'height' => 350, 'align' => 'center'];
//      $section->addImage(public_path().'/fen.png', $imageStyle);
//      $section->addImage(public_path().'/test.jpg');
//      //$section->addMemoryImage('http://localhost/image.php');//添加GD生成图片
//
//      //添加对象，支持后缀：'xls', 'doc', 'ppt'
//      //$section->addObject(public_path().'/demo.xls',['align' => 'center']);
//
//      //添加标题,支持1-9标题
//      $phpword->addTitleStyle(1, ['bold' => true, 'color' => '1BFF32', 'size' => 38, 'name' => 'Verdana']);
//      $section->addTitle('我是标题', 1);
//      $section->addTitle('我是标题2', 1);
//      $section->addTitle('我是标题3', 1);
//
//      //添加表格
//      $styleTable = [
//          'borderColor' => '006699',
//          'borderSize' => 6,
//          'cellMargin' => 50,
//      ];
//      $styleFirstRow = ['bgColor' => '66BBFF'];//第一行样式
//      $phpword->addTableStyle('myTable', $styleTable, $styleFirstRow);
//
//      $table = $section->addTable('myTable');
//      $table->addRow(400);//行高400
//      $table->addCell(2000)->addText('名称');
//      $table->addCell(2000)->addText('价格');
//      $table->addCell(2000)->addText('数量');
//      $table->addRow(400);//行高400
//      $table->addCell(2000)->addText('小米手机');
//      $table->addCell(2000)->addText('3999元');
//      $table->addCell(2000)->addText('50');
//      $table->addRow(400);//行高400
//      $table->addCell(2000)->addText('苹果手机');
//      $table->addCell(2000)->addText('5999元');
//      $table->addCell(2000)->addText('10');
//
//      //页眉与页脚
//      $header = $section->createHeader();
//      $footer = $section->createFooter();
//      $header->addPreserveText('LanRenKaiFa.com');
//      $footer->addPreserveText('学会偷懒，并懒出效率。 - LanRenKaiFa.com Page {PAGE} of {NUMPAGES}.');
//
//      //生成的文档为Word2007
//      $writer = \PHPWord_IOFactory::createWriter($phpword, 'Word2007');
//      $writer->save('hello.docx');