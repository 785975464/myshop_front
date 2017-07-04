<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	//注意模型类的名称UserModel要与表名相同
    // 定义自动验证
    protected $_validate    =   array(
        array('name','require','用户名必须'),
        );
    // 定义自动完成
    
    protected $_auto    =   array(    	
//		array(填充字段,填充内容[,填充条件][,附加规则])
//     	Model:: MODEL_INSERT 或者 1 ：新增数据时候填充（默认）
// 		Model:: MODEL_UPDATE 或者 2 ：更新数据时候填充
        // array('create_time','time',1,'function'),	//使用函数返回值的方法填充
        array('create_time','t_return',1,'callback'),	//使用当前 Model 的方法返回值填充
        );
    function t_return(){
		$today = time();
		//echo $today;	//获得时间戳
    	return date("Y-m-d H:i:s",$today);
    }


 }