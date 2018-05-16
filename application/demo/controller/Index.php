<?php
namespace app\demo\controller;

class Index
{
    public function index()
    {

        $view = new \think\View();
        return $view->fetch();

    }
}
