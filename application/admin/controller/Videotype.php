<?php
namespace app\admin\controller;
use \think\Db;
use \think\Controller;
class Videotype extends Controller
{
	public function index(){
		//如何访问视图层
		//return "hello";
		$view = new \think\View();
		return $view->fetch();
	}

	public function add(){
		$type=$_POST['videotype'];
		$num=Db::name("videotype")->where("typename='$type'")->count();
		if ($num) {
			$this->error("视频类型已经存在！");
		}else{
			$data=['typename'=>$type];
		    $res=Db::name("videotype")->insert($data);
		    if ($res) {
			    $this->success("添加成功!");
		    }else{
			    $this->error("添加失败!");
		    }
		}
		
	}
}