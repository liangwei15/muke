<?php
namespace app\admin\controller;
use \think\Db;
use \think\Controller;
class User extends Controller
{
	public function index(){
		//如何访问视图层
		//return "hello";
		//$view = new \think\View();
		//return $view->fetch();
		$users=Db::name("user")->select();
		$this->assign("ulist",$users);
		return $this->fetch();
	}

	public function edit(){
		$usid=input('param.usid');
		$type=Db::name("user")->find($usid);
		echo json_encode($type);
	}
}