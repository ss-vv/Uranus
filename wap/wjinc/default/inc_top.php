<?php
/*if(!$this->user['type']){
	echo '您无权访问此页面';
	exit;
}*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>代理中心</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<link href='/skin/main/bl_ococ.css?version=20160420' rel="stylesheet" type="text/css" />
<link href="/skin/new/css/lib.min.css?version=20160420"  type="text/css" rel="stylesheet" />
<!--new-->
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/skin/js/Array.ext.js"></script>
<script>var TIP=true;</script>
<script type="text/javascript" src="/skin/main/function.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="/skin/js/jquery.messager.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
<link href="/skin/new/css/mem.css" type="text/css" rel="stylesheet" />

<link href="/lib/ionic/css/ionic.min.css" type="text/css" rel="stylesheet" />
<link href="/css/main.pack.min.css?v=1610251707" type="text/css" rel="stylesheet" />

<style type="text/css">
html { overflow-y:auto; }
body {background-color: #fff; overflow-y:auto; padding-bottom:78px;}
.datainput { display:inline-block !important; }
#spinner {
	width: 100%; 
	height: 100%; 
	background-color: rgba(0,0,0,.4);
	opacity: 1;
	position: absolute; 
	z-index: 11;
}
#dailinav {
	width: 100%;
	min-width:0;
	margin-bottom:3px;
}
#dailinav li {
	text-align:center;
    width:14.25%;
	padding:10px 0;
	display: block;
	list-style-type: none;
	margin:0;
	float:left;
	background: #3682d0;
	/*background: #c32828;*/
	/*background: #414141;*/
}
#dailinav li a{
	color:#fff;
	font-size:14px;
}

.pagemain, .article {
	width:100%;
	padding:0;
	overflow:hidden;
	overflow-y:auto;
}

.tab-nav {    
	padding: 0;
    border-top: 1px solid #fff;
    position: fixed;
    display: block;
    bottom: 0;
	height:75px;
    background: rgba(255,255,255,.9);
}
.tab-item { display:inline-block; width:24%; text-align:center; max-width:100%; }
.tab-item a { color:#444; }

.bar-header { background:#88a6b1; }
</style>
<script type="text/javascript">
$(document).ready(function () {
    $("#member").click(
     function(){
		  $("#membernav").slideToggle();
		 }
    );
	$("#daili").click(
     function(){
		  $("#dailinav").slideToggle();
		 }
    );
	$("#report").click(
     function(){
		  $("#reportnav").slideToggle();
		 }
    );
});
</script>
</head>
<body>
<script>
$(document).ready(function () {
    $("#lotteryListEntry").click(
     function(){
		  $("#lotteryList").slideToggle();
		 }
    );
});
</script>

<div class="bar-header bar-positive nav-bar-container">
	<div class="nav-bar-block">
		<div class="bar-header bar-positive bar">
			<div class="buttons buttons-left">
				<span class="left-buttons">
					<a class="button button-icon icon-prepage"></a>
				</span>
			</div>
			<div class="title title-center header-item" style="transform: translate3d(0px, 0px, 0px); left: 56px; right: 56px;">代理中心</div>
		</div>
	</div>
	<div class="nav-bar-block">
		<div class="bar-header bar-positive bar">
			<div class="buttons buttons-left" style="opacity: 0;">
				<span class="left-buttons">
					<a class="button button-icon icon-homehover" href="/#/ucenter/index"></a>
				</span>
			</div>
		</div>
	</div>
</div>


<div class="tab-nav tabs"> 
	<a class="tab-item" href="/#/home">
		<i class="icon icon-home"></i>
		<span class="tab-title">首页</span>
	</a>
	<a class="tab-item" href="/#/lottery/list">
		<i class="icon icon-youxi" ></i>
		<span class="tab-title">游戏大厅</span>
	</a>
	<a class="tab-item" href="/#/ucenter/fundpwd">
		<i class="icon icon-29"></i>
		<span class="tab-title">资金管理</span>
	</a>
	<a class="tab-item" href="/#/ucenter/index">
		<i class="icon icon-yonghu"></i>
		<span class="tab-title tab-item-active">我的</span>
	</a>
</div>


<div id="dailinav" style="font-weight: normal;">
  <li><a href="/team/memberList">会员<br>管理</a></li>
  <li><a href="/team/onlineMember">在线<br>会员</a></li>
  <li><a href="/team/gameRecord">团队<br>记录</a></li>
  <li><a href="/team/report">团队<br>盈亏</a></li>
  <li><a href="/team/coin">团队<br>帐变</a></li>
  <li><a href="/team/cashRecord">团队<br>提现</a></li>
  <li><a href="/team/linkList">推广<br>链接</a></li>
  <div style="clear:both"></div>
</div>