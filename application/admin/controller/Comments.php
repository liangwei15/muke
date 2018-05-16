<?php
namespace app\admin\controller;
use \think\Db;
use \think\Controller;
class Comments extends Controller
{
    public function index()
    {

        $comments=Db::name("comments c,user u")->where("c.usid=u.usid")->order('coid')->select();
        $this->assign("ulist2",$comments);
        return $this->fetch();




    }

    public function delete($id){
        if(Db::name("comments")->delete($id))
        {

            $this->success('删除成功');
        }
        else $this->error('删除失败');

    }


}
