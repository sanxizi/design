<?php /*a:4:{s:61:"E:\SSD\wamp\www\design\application\index\view\user\index.html";i:1582017189;s:64:"E:\SSD\wamp\www\design\application\index\view\common\header.html";i:1581748649;s:61:"E:\SSD\wamp\www\design\application\index\view\common\nav.html";i:1582015059;s:64:"E:\SSD\wamp\www\design\application\index\view\common\footer.html";i:1581239273;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="referrer" content="no-referrer"/>

	<title>个人信息</title>

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
		<img src="http://localhost/design/public/static/img/table.jpg" class="background-img-pic">
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


<!-- <img src="http://localhost/design/public/static/img/avatar.png"  class="img-reponsive img-circle  user-avatar" >
-->
<div class="container-fluid"><br>

    <div class="row" >

        <div class="col-md-6 ">
            <div class="row">
                <div class="user-index-listbox">
                   <div class="bg-white-o padding radius-lg  margin-vertical">
                    <p class="text-left border-bottom-black padding lead">饮食推荐 
                        <button class="right btn btn-default radius">换一批</button>
                    </p>
                    <p>基础消耗+基础消耗 </p>
                    <p>基础消耗+基础消耗 </p>
                    <p>基础消耗+基础消耗 </p>
                    <p>基础消耗+基础消耗 </p>
                </div>

            </div>

            <div class="user-index-listbox">
                <div class="padding bg-green-o margin-vertical text-center radius-lg ">

                    <blockquote><p class="text-left border-bottom padding lead">基础消耗</p></blockquote>

                    <div class="index-base-k">

                        <div class="">0<br>当日摄入</div>
                        <div class="index-base-k-middle " style=""><br>基础代谢预算<br><span class="lead">17000</span><br>单位：千卡<br></div>
                        <div class="">0<br>运动消耗</div>

                    </div><br><br>

                    <div class="row margin-vertical">

                        <div class="col-xs-4">
                            <span class="">碳水化合物</span><hr>
                            <span class="">0.00g</span>

                        </div>
                        <div class="col-xs-4">
                            <span class="">碳水化合物</span><hr>
                            <span class="">0.00g</span>

                        </div>
                        <div class="col-xs-4">
                            <span class="">碳水化合物</span><hr>
                            <span class="">0.00g</span>

                        </div>

                    </div>


                </div>
            </div>
            <div class="user-index-listbox">

                <div class="padding bg-white-o margin-vertical  radius-lg">
                 <p class="text-left border-bottom-black padding lead">能量分析</p>

                 <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>早餐：</span>
                    <span>建议490~670千卡</span>
                    <span class="iconfont icon-add right"></span>
                </div>

                <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>午餐：</span>
                    <span>建议490~670千卡</span>
                    <span class="iconfont icon-add right"></span>
                </div>

                <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>晚餐：</span>
                    <span>建议490~670千卡</span>

                    <span class="iconfont icon-add right"></span>

                </div>

                <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>加餐：</span>
                    <span>建议490~670千卡</span>

                    <span class="iconfont icon-add right"></span>

                </div>

                <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>零食：</span>
                    <span>建议<670千卡</span>

                    <span class="iconfont icon-add right"></span>

                </div>

                <div class="index-base-food ">
                    <svg class="icon font-lg" aria-hidden="true"><use xlink:href="#icon-Egg"></use></svg>
                    <span>运动：</span>
                    <span>建议<670千卡</span>

                    <span class="iconfont icon-add right"></span>

                </div>


            </div>

        </div>

    </div>

</div>





<div class="col-md-6" >
    <div class="margin-vertical">
        <div class="index-chart" id="index-energy-chart">


        </div>
        <div class="index-chart" id="index-food-chart" >


        </div>
        <div class="index-chart" id="index-weight-chart" >


        </div>
    </div>
</div>

</div>
<br><br>
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var food = echarts.init(document.getElementById('index-food-chart'));
        // 指定图表的配置项和数据
        var option = {
        	title: {
        		text: '餐饮种类分析图'
        	},
        	tooltip: {},
        	legend: {
        		data:['食物种类']
        	},
/*        	xAxis: {
        		data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
        	},
        	yAxis: {},*/
        	series: [{
        		name: '食物种类',
        		type: 'pie',
        		data: [
                {value: 335, name: '直接访问'},
                {value: 310, name: '邮件营销'},
                {value: 234, name: '联盟广告'},
                {value: 135, name: '视频广告'},
                {value: 1548, name: '搜索引擎'}

                ]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        food.setOption(option);


        var energy = echarts.init(document.getElementById('index-energy-chart'));

        var eoption = {
            title: {
                text: '一周卡路里能量走势图'
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [820, 932, 901, 934, 1290, 1330, 1320],
                type: 'line',
                areaStyle: {}
            }]
        };
        energy.setOption(eoption);


        var weight = echarts.init(document.getElementById('index-weight-chart'));

        var woption = {
            title: {
                text: '一周体重走势图'
            },
            color: ['#3398DB'],
            tooltip: {
                trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
        {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisTick: {
                alignWithLabel: true
            }
        }
        ],
        yAxis: [
        {
            type: 'value'
        }
        ],
        series: [
        {
            name: '直接访问',
            type: 'bar',
            barWidth: '60%',
            data: [10, 52, 200, 334, 390, 330, 220]
        }
        ]
    };

    weight.setOption(woption);



    
</script>
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
