<?php
namespace app\index\controller;

class Index extends  controller
{
    public function index()
    {
        //$view = new \think\View();
		//return $view->fetch();
    }

    public function findpwd(){
        if(request()->isPost()){
            $email=input('email');
            //该邮箱是否存在
            $emailinfo=Db::name("users")->where("email",$email)->count();
            if($emailinfo){
                $title = "找回密码通知！";
                $srand = rand ( 11111, 99999 );
                $data ['rand'] = $srand;
                Db::name("users")->where ( "email = '$email'" )->update ( $data ); // 更新数据库
                // echo Db::name("users")->getLastSQL();die();
                $content = "校验码:$srand";

                if (SendMail ( $email, $title, $content )) {
                    $this->success( "发送成功,请到邮箱查看校验码!", url('setpwd',['email'=>$email]) );
                    die ();
                } else {
                    $this->error("发送失败" );
                    die ();
                }
            }else{
                $this->error("邮箱不存在");
            }
            //如果存在，则生成四位随机数，发到该邮箱
        }
        return $this->fetch();
    }
    public function setpwd(){
        if(request()->isPost()){
            $rand=input('rand');
            $newpwd=input('newpwd');
            $dbrand=Db::name("users")->where("email",session("email"))->find();
            // var_dump($dbrand);
            if($rand!=$dbrand["rand"]){
                $this->success("验证码错误");
            }else{
                Db::name("users")->where("email",session("email"))->update(["password"=>md5($newpwd)]);
                $this->success('重设密码成功',"index");
            }
        }else{
            $email=input("email");
            session("email",$email);
        }
        return $this->fetch();
    }






}
