<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    // public function index(){
    //     $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    // }
    public function hello($name='thinkphp'){
        echo 'hello,'.$name.'!';
    }

    private function hello2(){
        echo '这是private方法!';
    }

    public function hello3($name='thinkphp'){
        $this->assign('name',$name);
        $this->display('user');
    }

    public function index(){
        $user     = M('user');// 实例化user（数据表）数据模型
        $result     = $user->find(1);
        $this->assign('result',$result);
        $this->display();
    }

    public function read($id=1){
    	//这里之所以用M方法而没有用D方法，是因为find方法是基础模型类Model中的方法，
    	//所以没有必要浪费开销去实例化FormModel类（即使已经定义了FormModel类）
	    $Form   =   M('user');
	    // 读取数据
	    $data =   $Form->find($id);
	    if($data) {
	        $this->assign('data',$data);// 模板变量赋值
	    }else{
	        $this->error('数据错误');
	    }
	    $this->display();
 	}

    public function test(){
        $this->display('test');
    }

    public function register(){
        //echo '这是register方法!';
        $this->display('r');
    }


    // public function grid(){
        // echo '这是grid方法!';
    //     $Form   =   M('user');
    //     /**/
    //     import('Think.Page'); //引入thinkphp系统自带的分页类
    //     $count=$Form->where('isDeleted=0')->count();//得到总记录数
    //     // echo $count;
    //     $pageSize=5;
    //     //$page = new \Think\Page($count,$pageSize); //实例化Page类
    //     $page = getpage($count,$pageSize);
    //     $limit = $page->firstRow . ',' . $page->listRows;
    //     $page = $page -> show();    // 分页显示输出 
    //     $list = $Form->limit($limit)->where('isDeleted>0')->select(); // 当前页数据查询 
    //     /*
    //     $list = $Form->select(); // 当前页数据查询 
    //     $this->ajaxReturn($list);
    //     */
    //     $this->assign('totalRows',$count);
    //     $this->assign('page',$page);
    //     $this->assign('list',$list);
    //     $this->display('grid');
    // }


    public function getgrid(){
        // echo '这是getgrid方法!';
        $Form   =   M('user');
        /*
        import('Think.Page'); //引入thinkphp系统自带的分页类
        $count=$Form->count();//得到总记录数
        $pageSize=5;
        //$page = new \Think\Page($count,$pageSize); //实例化Page类
        $page = getpage($count,$pageSize);
        $limit = $page->firstRow . ',' . $page->listRows;
        $page = $page -> show();    // 分页显示输出 
        $list = $Form->limit($limit)->select(); // 当前页数据查询 
        */
        
        $list = $Form->where('isDeleted=0')->select(); // 当前页数据查询 
        //$this->ajaxReturn($list);
        
        //配置dataTable的json格式
        $draw = $_GET['draw'];//这个值作者会直接返回给前台
        //$draw=1;
        echo json_encode(array(
            "draw" => $draw,
            "recordsTotal" => $Form->where('isDeleted=0')->count(),
            "recordsFiltered" => $Form->where('isDeleted=0')->count(),
            "data" => $list
        ),JSON_UNESCAPED_UNICODE);

        

        //$this->ajaxReturn($list);
        //$this->assign('totalRows',$count);
        //$this->assign('page',$page);
        //$this->assign('list',$list);
        //$this->display('grid');
    }

}
