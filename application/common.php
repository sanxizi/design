<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//模块函数文件，必选


//删除文件夹下所有文件函数
//
function deldir($dir) {
//先删除目录下的文件：
	$dh=opendir($dir);
	while ($file=readdir($dh)) {
		if($file!="." && $file!="..") {
			$fullpath=$dir."/".$file;
			if(!is_dir($fullpath)) {
				unlink($fullpath);//删除文件
			} else {
				deldir($fullpath);
			}
		}
	}
	closedir($dh);
//删除当前文件夹：
	if(rmdir($dir)) {
		return true;
	} else {
		return false;
	}
} 