<?php 
namespace app\index\model;
use think\Db;
use think\Model;

use traits\model\SoftDelete;

//类名对应数据库表明
class Article extends Model{
	//use SoftDelete;//使用软删除
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
/*	public function getSexAttr($val){
		switch ($val) {
			case '1':
				return "男";
				break;
			case '2':
				return "女";
				break;
			
			default:
				return "未知";
				break;
		}
	}*/

	public function Insert($data){
		$art = new Article;

		$result = $art->save($data);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function Find($data){
		$result = Db::table('san_article')->where($data)->find();

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}

	public function InsertSave($data){
		$result = Db::table('san_save')->insert($data);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}



	public function FindSave($data){
		$result = Db::table('san_save')->where($data)->find();

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}
	public function DeleteSave($data){
		$result = Db::table('san_save')->where($data)->delete();

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

		public function InsertPraise($data){
		$result = Db::table('san_praise')->insert($data);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function FindPraise($data){
		$result = Db::table('san_praise')->where($data)->find();

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}
	public function DeletePraise($data){
		$result = Db::table('san_praise')->where($data)->delete();

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function Select($data){
		$result = Db::table('san_article')->where($data)->order('time desc')->select();

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}

	public function SelectAllPage($page){
		if ($page<1) {
			$result = Db::table('san_article')->where('id','gt',0)->order('time desc')->select();
		}else{
			$result = Db::table('san_article')->where('id','gt',0)->order('time desc')->paginate($page);
		}

		

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}

	public function Inc($id,$name){
		$result = Db::table('san_article')->where('id', $id)->setInc($name, 1);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function Dec($id,$name){
		$result = Db::table('san_article')->where('id', $id)->setDec($name, 1);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function InsertComment($data){
		$result = Db::table('san_comment')->insert($data);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	public function SelectComment($id){

		$result = Db::table('san_comment')->where('artid','eq',$id)->order('time desc')->select();

		if ($result) {
			return $result;
		}else{
			return false;
		}
	}
	public function SelectCommentUser($id){

		$result = Db::table('san_comment')->where('userid','eq',$id)->order('time desc')->select();

		if ($result) {
			return $result;
		}else{
			return false;
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
	//protected $autoWriteTimestamp =true;//开启自动更新时间戳
	//protected $createTime = 'retime';//值为false 关闭
	//protected $updateTime ='uptime';
	/*protected $deleteTime ='delete';修改软删除的目录字段*/
}

?>