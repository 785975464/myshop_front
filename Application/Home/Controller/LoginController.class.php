<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    // public function index(){
    //     $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    // }
    public function index(){
        echo 'login index!';
    }

    public function test(){
        $this->display('test');
    }

    public function login(){
        $u=I('Post.username');
        $p=I('Post.password');
        $data['name']=$u;
        $data['password']=$p;

        $User = M("User"); // 实例化User对象
        $data = $User->where($data)->select();
        if($data) {
            $this->assign('data',$data);// 模板变量赋值
            //$this->success('登录成功！', '/Index/index');
            $this->display('Index/login');
        }else{
            //$this->error('数据错误');
            $this->error("登陆失败",'javascript:history.back(-1);',1);
        }
        echo 'login!';
        
        
    }

}
