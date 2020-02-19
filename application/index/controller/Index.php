<?php
namespace app\index\controller;

class Index
{
    public function index()
    {

    	echo "666";
    	
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function sendEmail(){
        $respose = mail("3307361757@qq.com", "nothing", "邮件内容");

        if (!!$respose) {
            echo "发送成功！";
            # code...
        }else{
            echo "发送失败！";
        }
    }
}
