<?php
namespace app\admin\controller;
use \think\Db;
use \think\Controller;
class Index extends Controller
{
    public function index()
    {
		//如何访问视图层
		//return "hello";
		$view = new \think\View();
		return $view->fetch();
		// $users=Db::name("user")->order('usid desc')->select();
		// $this->assign("ulist",$users);
		// return $this->fetch();
    }
}
