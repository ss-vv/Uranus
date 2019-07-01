<?php if($this->user['uid']){	
header('location: /');
exit;
 } ?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>大通彩票-专注彩票网投十余年</title>
<link rel="stylesheet" href="/css/core.css">
<script type="text/javascript">
	function browserRedirect() {
	    var sUserAgent = navigator.userAgent.toLowerCase();
	    //var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
	    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
	    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
	    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
	    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
	    var bIsAndroid = sUserAgent.match(/android/i) == "android";
	    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
	    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
	    if (( bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) )
		{
			window.location.href=domainConfig.mobileUrl;  //
		}
	}
	//browserRedirect();
</script>

<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>


<script type="text/javascript" src="/skin/main/onload.js?version=20160420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/js/guest.js"></script>
<script type="text/javascript" src="/yoy/js/global.js"></script>
<?php
if(!$_SESSION['from']){
	if($_GET['from'] == 'm'){
		session_start;
		$_SESSION['from']=$_GET['from'];
	}else{
		echo '<script type="text/javascript">browserRedirect();</script>';
	}
}
?>	
</head>
<body>
    <!-- global header start -->
    <div class="header">
        <div class="container clearfix">
            <div class="logo fl">
                <a href="/index.php" id="ele-logo-img" title="首页"><img src="/yoy/logoo.png"  width="250" height="90" ></a>
            </div>
            <div class="nav fl" id="nav">
                <ul class="clearfix">
                    <li><a href="/index.php">网站首页</a></li>
                    <li><a href="/reg.php">注册开户</a></li>
                    <li><a href="/At2.php">常见问题</a></li>
                    <li><a href="/At1.php">关于我们</a></li>
                    <li><a href="/At8.php">加盟合作</a></li>
                    <li class="hot"><a href="/At6.php">最新优惠</a><i></i></li>
                    <li><a href="http://api.pop800.com/chat/361580" target="_blank">在线客服</a></li>
                </ul>
            </div>
            <div class="tool-bar">
                <ul class="clearfix">
                    
                    <li class="cyl2">|</li>
                    <li><a class="cyl2" href="javascript:void(0);" onclick="guestLogin();">免费试玩</a></li>
                    <!-- <li class="cyl2">|</li>
                    <li><a class="cyl2" href="xl/index.php" target=_blank>线路检测</a></li> -->
                    <li class="cyl2">|</li>
                    <li><a class="cyl2" href="javascript:void(0);" onclick="SetHome(this,location.href);">设为首页</a></li>
                    <li>|</li>
                    <li class="lan clearfix">
                        <a href="javascript:void(0);" class="cn"></a>
                        <a href="javascript:void(0);" class="hk"></a>
                        <a href="javascript:void(0);" class="us"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="lgbox" id="lg_box">
        <div class="container">
            <form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
                <ul class="clearfix">
                    <li class="tit">THE LOGIN</li>
                    <li>
                        <label for="userName" class="cover">账号</label>
                        <input name="username" id="username" type="text" tabindex="1">
                    </li>
                    <li>
                        <label for="userPwd" class="cover">密码</label>
                        <input type="password" name="password" id="password" autocomplete="off" tabindex="2"/>
                    </li>
                    <li class="verfify">
                        <label for="loginVcode" class="cover">验证码</label>
                        <input name="vcode" id="vcode" type="text" size="4" maxlength="4" tabindex="3" >
                         <img alt="验证码" src="/user/vcode/1512316060" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()">
                    </li>
                    <li>
                        <input class="btn-lg" name="Submit" type="submit" value="" tabindex="4" />
                    </li>
                    <li>
                        <a href="/reg.php" class="btn-reg"></a>
                    </li>
                    <li> <a href="javascript:alert('请联系大通彩票客服取回密码')" style="margin-left: 5px;color:#FFF;">忘记密码</a></li>
                </ul>
            </form>
		</div>
	</div>
    <!-- global header end -->