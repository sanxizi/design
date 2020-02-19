<?php /*a:3:{s:61:"E:\SSD\wamp\www\design\application\index\view\user\login.html";i:1582015722;s:64:"E:\SSD\wamp\www\design\application\index\view\common\header.html";i:1581748649;s:64:"E:\SSD\wamp\www\design\application\index\view\common\footer.html";i:1581239273;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="referrer" content="no-referrer"/>

	<title>登陆注册</title>

	<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/css/style.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/css/auto.css">

<!-- 	<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/css/[css].css">
-->
<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/css/iconfont.css">
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="http://localhost/design/public/static/alert/alert.css">


</head>

</body> 

<div class="background-img">

	<div class="hidden-xs hidden-sm">
		<img src="http://localhost/design/public/static/img/cake.png" class="background-img-pic">
	</div>
	<div class="hidden-md hidden-lg">
		<img src="http://localhost/design/public/static/img/cakes.png" class="background-img-pic">
	</div>
</div>

<div class="waring-tip">
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
</div>

<div class="login-content padding" >

	<!-- 登陆面板 -->

	<form action="" class="col-md-3 login-panel  ">

		<div class="form-group text-center ">

			<svg  t="1578896726322" class="login-img img-reponsive img-circle  padding border-black" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2621" width="60" height="60"><path d="M793.6 316.991454C793.6 153.703982 661.792629 21.333333 499.2 21.333333 336.607371 21.333333 204.8 153.703982 204.8 316.991454 204.8 480.278923 336.607371 612.649572 499.2 612.649572 661.792629 612.649572 793.6 480.278923 793.6 316.991454ZM256 316.991454C256 182.101803 364.88435 72.752137 499.2 72.752137 633.51565 72.752137 742.4 182.101803 742.4 316.991454 742.4 451.881103 633.51565 561.230769 499.2 561.230769 364.88435 561.230769 256 451.881103 256 316.991454Z" p-id="2622"></path><path d="M0 998.290598 0 1024 25.6 1024 486.4 1024 998.4 1024 1024 1024 1024 998.290598C1024 767.462671 787.090923 561.230769 512 561.230769 495.448045 561.230769 478.989086 561.900892 462.660538 563.232578 448.568439 564.381869 485.255599 576.786276 486.4 590.938596 501.350035 589.719337 496.831226 612.649572 512 612.649572 760.310844 612.649572 972.8 797.623669 972.8 998.290598L998.4 972.581197 486.4 972.581197 25.6 972.581197 51.2 998.290598C51.2 861.757427 137.013906 736.945338 275.263548 667.439085 287.906261 661.082846 293.024384 645.637353 286.695191 632.94061 280.366001 620.243866 264.986234 615.103872 252.34352 621.460111 97.581613 699.268053 0 841.195691 0 998.290598Z" p-id="2623"></path></svg>

		</div>

		<div class=" no-radius">
	
			<input type="text" class=" login-input-text" placeholder="请输入账号" aria-describedby="basic-addon1">
		</div><br>

		<div class=" no-radius">

			<input type="text" class="login-input-text" placeholder="请输入密码" aria-describedby="basic-addon1">
		</div><br>

		<div class="form-group">
			<div class="checkbox">
				<label>
					&nbsp;<input type="checkbox"> 记住密码
				</label>
			</div>

		</div>

		<div class="form-group text-center">
			<button type="submit" class="login-input-style bg-red">点击登陆</button>
		</div><br>

		<div class="text-right small"><em>还没有账号？来这里 <a class="pointer register-btn">注册</a></em></div>


	</form>


	<!-- 注册面板 -->


	<form action="" class="col-md-3 register-panel  hide">

		<div class="form-group text-center ">

			<svg t="1578899577609" class="login-img img-reponsive img-circle  padding border-black" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2777" width="60" height="60"><path d="M524.8 21.504C361.984 21.504 230.4 153.6 230.4 316.928c0 111.616 61.952 209.408 153.088 259.584C166.912 628.224 0 804.352 0 998.4c0 0 0 25.6 26.624 25.6s24.576-25.6 24.576-25.6c0-200.704 212.48-385.536 460.8-385.536h12.8c162.816 0 294.4-132.608 294.4-295.936S687.616 21.504 524.8 21.504z m0 539.648C390.656 561.152 281.6 452.096 281.6 316.928c0-134.656 109.056-244.224 243.2-244.224S768 182.272 768 316.928c0 135.168-109.056 244.224-243.2 244.224zM1024.512 809.984c0 13.312-10.752 24.576-24.576 24.576h-163.84v163.84c0 13.312-10.752 24.576-24.576 24.576s-24.576-11.264-24.576-24.576v-163.84h-163.84c-13.312 0-24.576-11.264-24.576-24.576 0-13.312 11.264-24.576 24.576-24.576h163.84v-163.84c0-13.312 11.264-24.576 24.576-24.576s24.576 11.264 24.576 24.576v163.84h163.84c13.824 0 24.576 11.264 24.576 24.576z" p-id="2778"></path></svg>

		</div>

		<div class="">
	
			<input type="text" class="login-input-text" placeholder="请输入昵称" aria-describedby="basic-addon1">
		</div><br>

		<div class="">

			<input type="text" class="login-input-text" placeholder="请输入账号" aria-describedby="basic-addon1">
		</div><br>

		<div class="">
	
			<input type="text" class="login-input-text" placeholder="请输入密码" aria-describedby="basic-addon1">
		</div><br>

		<div class=" ">
	
			<input type="text" class="login-input-text" placeholder="请再次输入确认" aria-describedby="basic-addon1">
		</div><br>

		<div class="login-input-style bg-white-o">
			<span class=" ">验证码 ：</span>
			<input type="text" class="no-border no-bg " placeholder="请输入验证码" aria-describedby="basic-addon1">
			<button class=" bg-green  pointer login-code-btn">点击获取</button>
		</div><br>


		<div class="form-group text-center">
			<button type="submit" class="login-input-style bg-red">注册</button>
		</div><br>

		<div class="text-right small"><em>有账号了？点这里 <a class="pointer register-btn">登陆</a></em></div>

	</form>
	<div class="col-md-3 panel-shadow padding-max visible-lg">

		<div class="full-width full-height box-shadow-max bg-green-o padding">
			<h3>养生以不伤为本</h3><hr>

			<p class="lead">治身养性谨务其细，不可以小益为不平而不修，不可以小损为无伤而不防。</p>
			<blockquote>
				<p>五谷为养，五蓄为助，五菜为充，五果为益。	――《养生四要》</p>
			</blockquote>

			<p class="text-right">

<!-- 			<button class="btn btn-default bg-white lead">开启我的燃烧之路！</button>
 -->
			<span class=" glyphicon glyphicon-arrow-right btn btn btn-default bg-white img-circle"></span>
			</p>

		</div>


	</div>
	
</div>










<script type="text/javascript" src="http://localhost/design/public/static/js/jquery-3.4.1.min.js"></script>
<!-- <script type="text/javascript" src="http://localhost/design/public/static/js/popper.min.js"></script> -->
<script type="text/javascript" src="http://localhost/design/public/static/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/design/public/static/alert/alert.js"></script>
<script type="text/javascript" src="http://localhost/design/public/static/js/main.js"></script>
<!-- <script type="text/javascript" src="http://localhost/design/public/static/js/[js].js"></script>
 -->

</body>
</html>