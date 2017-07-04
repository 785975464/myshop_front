<?php
namespace Home\Controller;
use Think\Controller;
class DataController extends Controller {
    // public function index(){
    //     $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    // }
    public function index(){
        echo 'login index!';
    }

    public function datasave(){
        // echo 'save page!';
        $data['id'] = $_POST['edit_id'];        //如果id是数据表的主键的话，系统自动会把主键的值作为更新条件来更新其他字段的值。
        $data['name'] = $_POST['edit_name'];
        $data['password'] = $_POST['edit_password'];
        $data['create_time'] = $_POST['edit_create_time'];
        $User = M("User"); // 实例化User对象
        $result = $User->save($data); // 根据条件保存修改的数据
        // 也可以根据表单提交的POST数据创建数据对象
        // $User->create();
        // $User->save(); // 根据条件保存修改的数据
        if($result !== false){
            echo '数据更新成功！';
        }else{
            echo '数据更新失败，请重试！';
        }
        // $this->ajaxReturn('msg','ok');  
        // $this->display('Index/grid');
    }


    public function datadelete(){
        // echo 'delete page!';
        $data['id'] = $_POST['id'];
        $data['isDeleted'] = 1;
        // echo $data['id'];
        // $data['name'] = $_POST['edit_name'];
        // $data['password'] = $_POST['edit_password'];
        // $data['create_time'] = $_POST['edit_create_time'];
        $User = M("User"); // 实例化User对象
        if(!empty($data)){  //判断不为空
            // $result = $User->where($data)->delete(); // 根据条件保存修改的数据
            $result = $User->save($data); // 将删除操作改为置标志位isDeleted为1
            if($result !== false){
                echo '数据删除成功！';
            }else{
                echo '数据删除失败，请重试！';
            }
        }
        else{
            echo '数据删除失败，请重试！';
        }
        
    }

    //回收站功能
    public function recycle(){
        // echo '这是recycle方法!';
        $Form   =   M('user');
        $list = $Form->where('isDeleted=1')->select(); // 当前页数据查询 
        //$this->ajaxReturn($list);
        
        //配置dataTable的json格式
        $draw = $_GET['draw'];//这个值作者会直接返回给前台
        // $draw=1;
        echo json_encode(array(
            "draw" => $draw,
            "recordsTotal" => $Form->where('isDeleted=1')->count(),
            "recordsFiltered" => $Form->where('isDeleted=1')->count(),
            "data" => $list
        ),JSON_UNESCAPED_UNICODE);
    }

    public function undoDeleteData(){
        $data['id'] = $_POST['id'];
        $data['isDeleted'] = 0;
        $User = M("User"); // 实例化User对象
        if(!empty($data)){  //判断不为空
            // $result = $User->where($data)->delete(); // 根据条件保存修改的数据
            $result = $User->save($data); // 将删除操作改为置标志位isDeleted为1
            if($result !== false){
                echo '数据恢复成功！';
            }else{
                echo '数据恢复失败，请重试！';
            }
        }
        else{
            echo '数据恢复失败，请重试！';
        }
    }
    // public function login(){
    //     $u=I('Post.username');
    //     $p=I('Post.password');
    //     $data['name']=$u;
    //     $data['password']=$p;

    //     $User = M("User"); // 实例化User对象
    //     $data = $User->where($data)->select();
    //     if($data) {
    //         $this->assign('data',$data);// 模板变量赋值
    //         //$this->success('登录成功！', '/Index/index');
    //         $this->display('Index/login');
    //     }else{
    //         //$this->error('数据错误');
    //         $this->error("登陆失败",'javascript:history.back(-1);',1);
    //     }
    //     echo 'login!';
    // }

}
