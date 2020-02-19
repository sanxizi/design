<?php
namespace app\admin\controller;
use think\facade\Request;
class User
{
	public function index()
	{



		return view();
	}


	public function login(){

		//echo Request::module();

		return view();
	}

	public function userinfo(){

		//echo Request::module();

		return view();
	}

	public function publics(){

		//echo Request::module();

		return view();
	}


	public function delRuntime() {
		$path = env('RUNTIME_PATH');
        //如果是目录则继续
		if (!is_dir($path)) {
			echo 'runtime目录不存在';
			exit;
		}
        //扫描一个文件夹内的所有文件夹和文件并返回数组
		$p = scandir($path);
		$arr = ['cache', 'log', 'temp'];
		foreach ($p as $val) {
			if (!in_array($val, $arr)) {
				continue;
			}
			if (!is_dir($path . $val)) {
				continue;
			}
			$dir = $path . $val . '/';
            //先删除目录下的文件：
			$dh = opendir($dir);
			while ($file = readdir($dh)) {
				if ($file != "." && $file != "..") {
					$fullpath = $dir . "/" . $file;
					if (!is_dir($fullpath)) {
						@unlink($fullpath);
					} else {
						deldir($fullpath);
					}
				}
			}
			closedir($dh);
			@rmdir($path . $val . '/');
		}
		echo '删除runtime成功';
		exit;
	}



}