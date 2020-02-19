<?php 
namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;

//类名对应数据库表明
class Fileup extends Model{
	use SoftDelete;//使用软删除
//============================================
	//自动完成
/*	protected $auto = [
		'logtime'
	];
	protected $insert = [
		'regtime'
	];
	protected $update = [
		'updtime'
	];
*/
//============================================
	//获取器
	public function getLevelAttr($val){
		switch ($val) {
			case '1':
				return "仅好友可见";
				break;
			case '2':
				return "仅自己可见";
				break;
			
			default:
				return "公开";
				break;
		}
	}
//============================================
	//修改器
	/*public function setPasswordAttr($val,$data){
		//return md5($val);//加第二个参数
		return $val.$data['ip'];
	}*/
//============================================
	/*public function setLogtimeAttr(){
		return date("Y-m-d H:i:s",time());
	}

	public function setRegtimeAttr(){
		return date("Y-m-d H:i:s",time());
	}

	public function setUpdtimeAttr(){
		return date("Y-m-d H:i:s",time());
	}*/
//============================================
	protected $autoWriteTimestamp =true;//开启自动更新时间戳
	protected $createTime = 'retime';//值为false 关闭
	protected $updateTime ='uptime';
	/*protected $deleteTime ='delete';修改软删除的目录字段*/
}

 ?>