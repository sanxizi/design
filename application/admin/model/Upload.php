<?php 
namespace app\index\model;
use think\Db;
use think\Model;

use traits\model\SoftDelete;


class Upload extends Model{


	public function Insert($data){
		$result = Db::table('san_upload')->insert($data);

		if (!!$result) {
			return true;
		}else{
			return false;
		}
	}



/*	public function FindSave($data){
		$result = Db::table('san_save')->where($data)->find();

		if (!!$result) {
			return $result;
		}else{
			return false;
		}
	}
	public function DeleteSave($data){
		$result = Db::table('san_save')->where($data)->delete();

		if (!!$result) {
			return true;
		}else{
			return false;
		}
	}

	public function Select($data){
		$result = Db::table('san_article')->where($data)->order('time desc')->select();

		if (!!$result) {
			return $result;
		}else{
			return false;
		}
	}

	public function SelectAll($page){

		$result = Db::table('san_article')->where('id','gt',0)->order('time desc')->paginate($page);;

		if (!!$result) {
			return $result;
		}else{
			return false;
		}
	}*/


}

?>