<!doctype html>
<html>
<input type="hidden" value="<?=$this->user['username']?>" />
<head>
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta charset="utf-8"/>
<title>后台管理</title>
<link rel="stylesheet" href="/skin/admin/layout.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<!--[if IE]>
	<link rel="stylesheet" href="/skin/admin/ie.css" type="text/css" />
	<script src="/skin/js/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="/skin/js/jquery-1.8.0.min.js"></script>
<script src="/skin/admin/onload.js"></script>
<script src="/skin/admin/wjevent.js"></script>
<script src="/skin/admin/function.js"></script>
<script src="/skin/js/Array.ext.js"></script>
<script src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script src="/skin/js/jquery.messager.js"></script>
<script src="/skin/js/jquery.cookie.js"></script>
<script type="text/javascript">
$(function(){
	$('.quick_search input[name=username]')
	.focus(function(){
		if(this.value=='查找会员') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='查找会员';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});
});
function searchUserSubmit(err,data){
	if(err){
		error(err);
	}else{
		$('#main').html(data);
	}
}
var TIP=true;
</script>
<style type="text/css">
#header h2.section_title a {width: 120px;text-indent: 2em;}
</style>
</head>
<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><?=$this->user['username']?></h1>
			<h2 class="section_title"><!--<a class="tjgk bq load" href="system/settings">系统设置</a><a class="tjgk bq load" href="business/betLog">普通投注</a>--><a class="tjgk bq load" href="member/index">用户列表</a><a class="tjgk bq load" href="member/add">添加用户</a><a class="tjgk bq load" onClick="rechargModal()" href="#" value="充值">账号充值</a>
			<a class="tjgk bq load" method="post" target="ajax" call="clearDataSuccess" title="即将清空程序缓存，是否继续！" dataType="json" href="/admin778899.php/clear/rmfile">清空缓存</a>
			<a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空前台所有程序缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfileqiantai">清空前台缓存</a>
            <a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空手机版前台缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfilewap">清空手机版缓存</a>
            </h2>
            <div class="btn_view_site"><a href="/admin778899.php/user/logout">安全退出</a></div>
		</hgroup>
	</header>
	
	<section id="secondary_bar">
		<div class="user">
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a>当前位置：<strong>首页</strong></a> <div class="breadcrumb_divider"></div> <span id="position"><a class="current">统计概况</a></span></article>
		</div>
	</section>
	<aside id="sidebar" class="column">
		<form action="/admin778899.php/member/listUser" class="quick_search" call="searchUserSubmit" dataType="html" target="ajax">
		  <input name="username" type="search" placeholder="查找会员" value="查找会员"/>
	    </form>
		<hr/>
		<h3>业务流水<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a class="bq yw_b_1" href="business/cash">提现请求</a></li>
			<li><a class="bq yw_b_2" href="business/cashLog">提现记录</a></li>
			<li><a class="bq yw_b_3" href="business/rechargeLog">充值记录</a></li>
			<li><a class="bq yw_b_4" href="business/betLog">普通投注</a></li>
			<li><a class="bq yw_b_7" href="business/coinLog">帐变明细</a></li>
		</ul>
		<h3>开奖数据<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
		<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="data/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
		<?php } ?>
		</ul>
        <h3>时间管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="time/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
			<?php } ?>
		</ul>
		<h3>数据统计<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="countData/index" class="s_b_1 bq current">统计概况</a></li>
			<li><a href="countData/betDate" class="s_b_2 bq">统计报表</a></li>
			<li><a href="kjdata/test" class="s_b_2 bq">开奖检测</a></li>
		</ul>
		<h3>代理分成管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
        	<li><a href="bonus/bonuslist" class="bq jf_b_2">分成统计</a></li>
		</ul>		
        <h3>用户管理<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="member/add" class="yh_b_1 bq">增加会员</a></li>
			<li><a href="member/add2" class="yh_b_1 bq">增加代理</a></li>
			<li><a href="member/index" class="yh_b_2 bq">用户列表</a></li>
            <li><a href="member/bank" class="yh_b_4 bq">银行信息</a></li>
            <li><a href="member/loginLog" class="yh_b_5 bq">登录日志</a></li>
		</ul>
		<h3>管理人员<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="manage/index" class="g_b_1 bq">管理员列表</a></li>
            <li><a href="manage/controlLog" class="g_b_3 bq">操作日志</a></li>
            <li><a href="manage/loginLog" class="g_b_4 bq">登录日志</a></li>
		</ul>
		<h3>系统设置<a>＋</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="system/settings" class="bq t_b_4">系统设置</a></li>
			<li><a href="system/notice" class="bq t_b_3">公告中心</a></li>
			<li><a href="system/bank" class="bq t_b_5">收款类型</a></li>
			<li><a href="system/withdraw" class="bq t_b_6">提款类型</a></li>
			<li><a href="system/type" class="bq t_b_8">彩种管理</a></li>	
			<li><a href="system/played" class="bq t_b_9">玩法管理(A盘)</a></li>
			<li><a href="system/played2" class="bq t_b_9">玩法管理(B盘)</a></li>			
			<li><a href="database/backup" class="g_b_4 bq">数据备份</a></li>
			<li><a href="system/clear" class="bq t_b_4">数据清理</a></li>
		</ul>
		<h3>清空缓存<a>＋</a></h3>
		<ul  style="display:none;">
			<li><a class="tjgk bq load" method="post" target="ajax" call="clearDataSuccess" title="即将清空程序缓存，是否继续！" dataType="json" href="/admin778899.php/clear/rmfile">清空缓存</a></li>
			<li><a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空前台所有程序缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfileqiantai">清空前台缓存</a></li>
			<li><a class="tjgk bq load" style="width:150px;" method="post" target="ajax" call="clearDataSuccess" title="即将清空手机版前台缓存, 此操作可能造成前台短暂卡慢,如未更改设置请勿操作，是否继续！" dataType="json" href="/admin778899.php/clear/rmfilewap">清空手机版缓存</a></li>
		</ul>
		<ul class="toggle"></ul>

		<footer>
			<hr />
			<p><strong>Copyright &copy; 2017后台管理系统</strong></p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="message-tip"></section>
	<section id="main" class="column"><?php $this->display('count/index.php'); ?></section>
</body>
</html>
<script language="javascript" type="text/javascript" src="//js.users.51.la/19184116.js"></script>