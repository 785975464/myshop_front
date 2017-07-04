<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{
	public function insert(){
        $Form   =   D('user');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }

    public function read($id=1){
    	//这里之所以用M方法而没有用D方法，是因为find方法是基础模型类Model中的方法，
    	//所以没有必要浪费开销去实例化FormModel类（即使已经定义了FormModel类）
	    $Form   =   M('user');
	    // 读取数据
	    $data =   $Form->find($id);

	    $map['id&password'] =array(array('LT','5'),array('like','%A%'),'_multi'=>true);
	    $time = $Form->where($map)->select(); 
	    //dump($time);	//测试输出用
	    $this->assign('time',$time);
 		// 把查询条件传入查询方法

	    //$time = $Form->where('id=23')->getField('create_time');
	    if($data) {
	        $this->assign('data',$data);// 模板变量赋值
	        
	        //$this->assign('time',$time);
	    }else{
	        $this->error('数据错误');
	    }
	    $this->display();
 	}

 	public function edit($id=1){
	    $Form   =   M('user');
	    $this->assign('u',$Form->find($id));
	    $this->display();
	 }
	 public function update(){
	 	//数据的更新操作在ThinkPHP使用save方法，
	 	//可以看到，我们同样可以使用create方法创建表单提交的数据，
	 	//而save方法则会自动把当前的数据对象更新到数据库，而更新的条件其实就是表的主键，
	 	//这就是我们在编辑页面要把主键的值作为隐藏字段一起提交的原因。
	    $Form   =   D('user');
	    if($Form->create()) {
	        $result =   $Form->save();
	        //save方法的返回值是影响的记录数，如果返回false则表示更新出错。
			//有些时候我们只需要修改某个字段的值，就可以使用setField方法，而不需要每次都调用save方法。
	        $Form->where('id=2')->setField('create_time','2016-09-12');
	        if($result) {
	            $this->success('操作成功！');
	        }else{
	            $this->error('写入错误！');
	        }
	    }else{
	        $this->error($Form->getError());
	    }
	 }

}