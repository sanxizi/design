<?php /*a:4:{s:63:"E:\SSD\wamp\www\design\application\index\view\user\publics.html";i:1582018231;s:64:"E:\SSD\wamp\www\design\application\index\view\common\header.html";i:1581748649;s:61:"E:\SSD\wamp\www\design\application\index\view\common\nav.html";i:1582015059;s:64:"E:\SSD\wamp\www\design\application\index\view\common\footer.html";i:1581239273;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="referrer" content="no-referrer"/>

	<title>美食广场</title>

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
		<img src="http://localhost/design/public/static/img/house.png" class="background-img-pic">
	</div>
	<div class="hidden-md hidden-lg">
		<img src="[img-m]" class="background-img-pic">
	</div>
</div>

<script type="text/javascript" src="http://localhost/design/public/static/js/echarts.min.js"></script>
<script type="text/javascript" src="http://localhost/design/public/static/js/iconfont-food.js"></script>
<!-- 导航条 -->

<nav class="nav">

	<div class="hidden-xs hidden-sm pointer">

		<div class="col-md-2 col-md-offset-1 ">
			<span class="lead"><i class="iconfont icon-rfq1  margin-horzontal" aria-hidden="true"> </i> 饮食推荐</span>
		</div>

		<div class="col-md-5 col-md-offset-2">
			<ul class="nav-menu-pc text-right">
				<a href="<?php echo url('user/index'); ?>"><li><i class="iconfont icon-warehouse-delivery  margin-horzontal" aria-hidden="true"></i> 我的首页</li></a>
				<a href="<?php echo url('user/publics'); ?>"><li><i class="iconfont icon-logistic margin-horzontal" aria-hidden="true"></i> 美食广场</li></a>
				<a href="<?php echo url('user/userinfo'); ?>"><li><i class="iconfont icon-data margin-horzontal" aria-hidden="true"></i> 个人中心</li></a>
			</ul>

		</div>

		<div class="col-md-2 text-center nav-pc-avatar">

			<p class="full-width ">
				<svg  t="1578896726322" class="nav-user-img img-reponsive img-circle  padding-min border-black" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2621" ><path d="M793.6 316.991454C793.6 153.703982 661.792629 21.333333 499.2 21.333333 336.607371 21.333333 204.8 153.703982 204.8 316.991454 204.8 480.278923 336.607371 612.649572 499.2 612.649572 661.792629 612.649572 793.6 480.278923 793.6 316.991454ZM256 316.991454C256 182.101803 364.88435 72.752137 499.2 72.752137 633.51565 72.752137 742.4 182.101803 742.4 316.991454 742.4 451.881103 633.51565 561.230769 499.2 561.230769 364.88435 561.230769 256 451.881103 256 316.991454Z" p-id="2622"></path><path d="M0 998.290598 0 1024 25.6 1024 486.4 1024 998.4 1024 1024 1024 1024 998.290598C1024 767.462671 787.090923 561.230769 512 561.230769 495.448045 561.230769 478.989086 561.900892 462.660538 563.232578 448.568439 564.381869 485.255599 576.786276 486.4 590.938596 501.350035 589.719337 496.831226 612.649572 512 612.649572 760.310844 612.649572 972.8 797.623669 972.8 998.290598L998.4 972.581197 486.4 972.581197 25.6 972.581197 51.2 998.290598C51.2 861.757427 137.013906 736.945338 275.263548 667.439085 287.906261 661.082846 293.024384 645.637353 286.695191 632.94061 280.366001 620.243866 264.986234 615.103872 252.34352 621.460111 97.581613 699.268053 0 841.195691 0 998.290598Z" p-id="2623"></path></svg>
			</p>

			<dl class="full-width text-left text-indent  bg-black nav-user-control  d-none nav-avatar-bottom">
				<dd class="padding-min"><i class="iconfont iconfont-calendar-o margin-horzontal" aria-hidden="true"></i> 经历路程 </dd>
		
				<dd class="padding-min"><i class="iconfont icon-account  margin-horzontal" aria-hidden="true"></i> 个人资料</dd>
				<dd class="padding-min"><i class="iconfont iconfont-key margin-horzontal" aria-hidden="true"></i> 修改密码</dd>
				<dd class="padding-min"><i class="iconfont iconfont-eraser margin-horzontal" aria-hidden="true"></i> 清除缓存</dd>
				<dd class="padding-min"><i class="iconfont iconfont-circle-o-notch margin-horzontal" aria-hidden="true"></i> 退出登陆</dd>

			</dl>

			
		</div>

	</div>

	<div class="hidden-md hidden-lg">
		<div class="col-xs-8 "><span class="lead"><i class="iconfont icon-rfq1  margin-horzontal" aria-hidden="true"> </i> 饮食推荐</span></div>

		<div class="col-xs-4 text-center nav-m-avatar nav-m-menu ">
			<i class="iconfont icon-viewgallery " aria-hidden="true"></i>
		</div>

		<div class="bg-black col-xs-12 border-top d-none nav-m-avatar-bottom">

			<div class="full-width">
				<div class="row">
				<div class="col-xs-4 text-center border-right">
					<svg  t="1578896726322" class="nav-user-img img-reponsive img-circle  padding-min border-black" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2621" ><path d="M793.6 316.991454C793.6 153.703982 661.792629 21.333333 499.2 21.333333 336.607371 21.333333 204.8 153.703982 204.8 316.991454 204.8 480.278923 336.607371 612.649572 499.2 612.649572 661.792629 612.649572 793.6 480.278923 793.6 316.991454ZM256 316.991454C256 182.101803 364.88435 72.752137 499.2 72.752137 633.51565 72.752137 742.4 182.101803 742.4 316.991454 742.4 451.881103 633.51565 561.230769 499.2 561.230769 364.88435 561.230769 256 451.881103 256 316.991454Z" p-id="2622"></path><path d="M0 998.290598 0 1024 25.6 1024 486.4 1024 998.4 1024 1024 1024 1024 998.290598C1024 767.462671 787.090923 561.230769 512 561.230769 495.448045 561.230769 478.989086 561.900892 462.660538 563.232578 448.568439 564.381869 485.255599 576.786276 486.4 590.938596 501.350035 589.719337 496.831226 612.649572 512 612.649572 760.310844 612.649572 972.8 797.623669 972.8 998.290598L998.4 972.581197 486.4 972.581197 25.6 972.581197 51.2 998.290598C51.2 861.757427 137.013906 736.945338 275.263548 667.439085 287.906261 661.082846 293.024384 645.637353 286.695191 632.94061 280.366001 620.243866 264.986234 615.103872 252.34352 621.460111 97.581613 699.268053 0 841.195691 0 998.290598Z" p-id="2623"></path></svg>
				</div>
				<div class="col-xs-8 line-height margin-vertical text-indent">
					<p class="lead ">三文鱼..</p>
					<p class="small">为了北方神的荣耀..</p>
				</div>
				</div>


			</div>
			<div class="col-xs-12"><hr></div>

			<dl class="full-width no-list-style bg-black line-height padding nav-user-control-mobile">
				<dd><i class="iconfont iconfont-home margin-horzontal" aria-hidden="true"></i> 我的首页</dd>
				<dd><i class="iconfont iconfont-envelope-o margin-horzontal" aria-hidden="true"></i> 消息通知</dd>
				<dd><i class="iconfont iconfont-comments-o margin-horzontal" aria-hidden="true"></i> 美食分享</dd>
				<dd><i class="iconfont iconfont-calendar-o margin-horzontal" aria-hidden="true"></i> 经历路程 </dd>
				<hr>
				<dd><i class="iconfont iconfont-user-o margin-horzontal" aria-hidden="true"></i> 个人中心</dd>
				<dd><i class="iconfont iconfont-key margin-horzontal" aria-hidden="true"></i> 修改密码</dd>
				<dd><i class="iconfont iconfont-eraser margin-horzontal" aria-hidden="true"></i> 清除缓存</dd>
				<dd><i class="iconfont iconfont-circle-o-notch margin-horzontal" aria-hidden="true"></i> 退出登陆</dd>

			</dl>

		</div>

	</div>

</nav>


<div class="container-fluid">
	<br>
	<div class="row">

		<div class="col-md-3 padding">
			<div class="s-box-o radius-lg">
				<p class="text-left border-bottom padding lead">当前餐厅</p>

				<p class="text-left border-bottom padding lead">当前窗口</p>

				<p class="text-left border-bottom padding lead">零食区</p>

				<p class="text-left border-bottom padding lead">饮料区</p>

			</div>

		</div>

		<div class="col-md-9 padding">
			<div class="s-box-o radius-lg">
				<blockquote><p class="text-left border-bottom padding lead">所有食物</p></blockquote>

				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>食物名称</th>
							<th>食物种类</th>
							<th>能量值</th>
							<th>操作</th>
						</tr>

						<tr>
							<td>食物名称</td>
							<td>食物种类</td>
							<td>能量值</td>
							<td>食物种类</td>
						</tr>
					</table>

				</div>

			</div>

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