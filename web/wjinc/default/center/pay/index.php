
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Welcome</title>
<meta name="renderer" content="webkit" /> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
<link href="/static/css/balls.css" rel="stylesheet" type="text/css" /> 
	<link href="/static/css/margin.css" rel="stylesheet" type="text/css"/>
	<link href="/static/css/center.css" rel="stylesheet" type="text/css"/>
</head>
<body class="iframe-body">
<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/static/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/skin.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript"> 
	var staticFileUrl = parent.getStaticDomain();
// 	var lunarDate = parent.lunarDate;
	var animalsYear = parent.animalsYear;
	var sysServerDate = parent.sysServerDate;
	var defaultSkin = parent.defaultSkin;
	var sysTrialGamePro = parent.sysTrialGamePro;
	var gameMap = parent.gameMap;
	var games = parent.games;
	var layer = parent.layer;
	parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript"> 
$.ajaxSetup ({
	cache: false //close AJAX cache
});
</script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js" async="async"></script>

	<div style="height: 700px">
		<input id="pageType" type="hidden" value="PAY" />
		<input id="payVal" type="hidden" value="onlinePayment" />
		<div class="memberheader">
	<div class="useravatar floatleft">
		<img src="/static/images/skin/blue/userlogo.jpg" width="84" height="83" alt="">
	</div>
	<div class="memberinfo floatleft">
		<h1 class="floatleft">
			<script language="javaScript">
				now = new Date(), hour = now.getHours()
				if (hour < 6) {
					document.write("凌晨好")
				} else if (hour < 9) {
					document.write("早上好")
				} else if (hour < 12) {
					document.write("上午好")
				} else if (hour < 14) {
					document.write("中午好")
				} else if (hour < 17) {
					document.write("下午好")
				} else if (hour < 19) {
					document.write("傍晚好")
				} else if (hour < 22) {
					document.write("晚上好")
				} else {
					document.write("夜里好")
				}
			</script>
			, <span id="userName" class="blue"></span>
		</h1>
		<div class="balance floatleft">
			<div class="balancevalue floatleft">
				中心钱包 : <span class="blue"><span id="balance" class="balanceCount">0</span> 豆</span>
			</div>
			<div
				class="floatright margintop7 marginright10 marginleft5 pointer">
				<a onclick="Center.init();" href="javascript:;">
					<img src="/static/images/skin/blue/btnrefresh.jpg" width="16" height="17" alt="">
				</a>
			</div>

		</div>
		<div class="gap5"></div>
		<p>彩票网投领导者·实力铸就品牌·诚信打造一切·相信品牌的力量</p>
		<p>最后登录：<span id="loginTime"></span></p>
	</div>
</div>
		
		<div class="membersubnavi">
			<div class="subnavi blue">
				充值
				<div class="subnaviarrow"></div>
			</div>
			<div class="subnavi blue">
				<a href="/center/withdraw/index.html">提款</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/pay/list.html">充值记录</a>
			</div>
			<div class="subnavi blue">
				<a href="/center/withdraw/list.html">提款记录</a>
			</div>
		</div>
		<div class="steps">
			<div class="substeps">
				<div class="substepitmgray1 substepitmblue1">
					<b>01</b> 选择支付模式
				</div>
				<div class="substepitmgray2">
					<b>02</b> 填写数额
				</div>
				<div class="substepitmgray2">
					<b>03</b> 选择银行
				</div>
				<div class="substepitmgray2">
					<b>04</b> 充值到账
				</div>
			</div>
			<div class="line"></div>
			<div class="tabs">
				<div class="tabtitle">选择充值模式：</div>
				<!--<div class="tab hide" id="tp_zxzf" payval="onlinePayment">请选择支付方式</div>
				<div class="tab hide" id="tp_sf_zfb" payval="onlinePayment" title="sfzfb">支付宝在线支付1</div>
				<div class="tab hide" id="tp_sf_wx" payval="onlinePayment" title="sfwx">微信在线支付1</div>
 				<div class="tab hide" id="tp_zf_zfb" payval="onlinePayment" title="zfzfb">支付宝在线支付2</div>
				<div class="tab hide" id="tp_zf_wx" payval="onlinePayment" title="zfwx">微信在线支付2</div>-->
               <div class="tab hide" id="tp_zfb" payval="alipay" onclick="Pay.initAWRechCfg(this);">支付宝手动</div>
				<div class="tab hide" id="tp_wx" payval="weixin" onclick="Pay.initWeChat(this);">微信支付</div>
				<div class="tab hide" id="tp_zfb" payval="alipay" onclick="Pay.initAWRechCfg(this);">网银转账</div>
				<div class="tab hide" id="tp_cft" payval="cft" onclick="Pay.initCft(this);">银行转账</div>
			</div>
		</div>
		<div class="subcontent" id="subpagetp_zxzf">
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2">
					<img src="/static/images/bank/method1.jpg" width="533" height="114" alt="">
				</div>
			</div>

			<form id="zxzf_form" method="post" onsubmit="return Pay.onlinePay('zxzf');" target="_blank" action="/userrech/onlinePay.do">
				<input type="hidden" name="bankName" id="onlinePayBankName" value="">
				<input type="hidden" name="token" id="zxzf_token" value="">
				<div class="subrow">
				
							　　　　　　　　　　　　　　　　<img src="/static/images/iconwarning.jpg" width="17" height="15" alt=""> <span class="smalltxt red">请选择支付方式</span>
						</span>
					</div>
				</div>
				<div id="online_channel" class="subrow hide">
					<div class="subcol1" style="line-height: 26px">在线渠道：</div>
					<div class="subrow" id="online_channel_html">
					</div>
				</div>
				<div class="subrow" style="display: none;">
					<div class="subcol1">银行种类：</div>
					<div class="subcol2 hide" id="bf-banks">
						<div class="banklist marginbtm10">
							<input type="radio" id="3002" name="payId" value="3002" class="bankradiobtn">
							<i class="ico-icbc"></i>
							<span style="padding-right: 8px;">工商银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3003" name="payId" value="3003" class="bankradiobtn">
							<i class="ico-ccb"></i>
							<span style="padding-right: 8px;">建设银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3005" name="payId" value="3005" class="bankradiobtn">
							<i class="ico-abc"></i>
							<span style="padding-right: 8px;">农业银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3020" name="payId" value="3020" class="bankradiobtn">
							<i class="ico-boco"></i>
							<span style="padding-right: 8px;">交通银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3026" name="payId" value="3026" class="bankradiobtn">
							<i class="ico-boc"></i>
							<span style="padding-right: 8px;">中国银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3022" name="payId" value="3022" class="bankradiobtn">
							<i class="ico-cebb"></i>
							<span style="padding-right: 8px;">光大银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3006" name="payId" value="3006" class="bankradiobtn">
							<i class="ico-cmbc"></i>
							<span style="padding-right: 8px;">民生银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3038" name="payId" value="3038" class="bankradiobtn">
							<i class="ico-post"></i>
							<span style="padding-right: 8px;">邮政银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3001" name="payId" value="3001"
								class="bankradiobtn"> <i class="ico-cmb"></i>
							<span style="padding-right: 8px;">招商银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3009" name="payId" value="3009"
								class="bankradiobtn"> <i class="ico-cib"></i>
							<span style="padding-right: 8px;">兴业银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3039" name="payId" value="3039"
								class="bankradiobtn"> <i class="ico-cccb"></i>
							<span style="padding-right: 8px;">中信银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3036" name="payId" value="3036"
								class="bankradiobtn"> <i class="ico-gdb"></i>
							<span style="padding-right: 8px;">广发银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3004" name="payId" value="3004"
								class="bankradiobtn"> <i class="ico-spdb"></i>
							<span style="padding-right: 8px;">浦发银行</span>
						</div>
						<div class="banklist marginbtm10">
							<input type="radio" id="3050" name="payId" value="3050"
								class="bankradiobtn"> <i class="ico-hxb"></i>
							<span style="padding-right: 8px;">华夏银行</span>
						</div>
					</div>
				</div>
				<div class="subrow margintop30">
					<div class="subcol1"></div>
					<div class="subcol2">
					
				</div>
			</form>
		</div>
		
		<div class="subcontent" style="display: none" id="subpagetp_sf_zfb">
			<form id="sf_zfb_form" method="post" onsubmit="return Pay.onlinePay('sf_zfb');" target="_blank" action="/userrech/onlinePay.do">
				<input type="hidden"  name="rechId" id="sf_zfb_rech_id" value="">
				<div class="subrow">
					<div class="subcol1"></div>
					<div class="subcol2">
						<img src="/static/images/bank/method_zfb.jpg" width="533" height="114" alt="">
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">充值数额：</div>
					<div class="subcol2">
						<input id="sf_zfb_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textfield1"> 
						<span class="validation">
							<img src="/static/images/iconwarning.jpg" width="17" height="15" alt="">
						</span>
						<span class="smalltxt red">单笔最高5000000豆，支付成功自动到账，无需提交存款信息!!</span>
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">支付帐户：</div>
					<div  class="subcol2">
						<div id="sfwx-subcol" class="banklist marginbtm10">
							<input class="bankradiobtn" type="radio" id="758" name="payId" value="758" code="ZFB" checked="checked" id="sfzfb_radio">
							<i class="ico-zfb"></i>
							<span style="padding-right: 8px;">支付宝</span>
						</div>
					</div>
				</div>
				<div class="subrow margintop30">
					<div class="subcol1"></div>
					<div class="subcol2">
						<input type="submit" class="c-button" value="开始充值">
					</div>
				</div>
			</form>
		</div>

		<div class="subcontent" style="display: none" id="subpagetp_zf_zfb">
			<form id="zf_zfb_form" method="post" onsubmit="return Pay.onlinePay('zf_zfb');" target="_blank" action="/userrech/onlinePay.do">
				<input type="hidden"  name="rechId" id="zf_zfb_rech_id" value="">
				<div class="subrow">
					<div class="subcol1"></div>
					<div class="subcol2">
						<img src="/static/images/bank/method_zfb.jpg" width="533" height="114" alt="">
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">充值数额：</div>
					<div class="subcol2">
						<input id="zf_zfb_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textfield1"> 
						<span class="validation">
							<img src="/static/images/iconwarning.jpg" width="17" height="15" alt="">
						</span>
						<span class="smalltxt red">单笔最高5000000豆，支付成功自动到账，无需提交存款信息!!!!</span>
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">支付帐户：</div>
					<div  class="subcol2">
						<div id="sfwx-subcol" class="banklist marginbtm10">
							<input class="bankradiobtn" type="radio" id="ZHIFUBAO" name="payId" value="ZHIFUBAO" code="ZFB" checked="checked" id="sfzfb_radio">
							<i class="ico-zfb"></i>
							<span style="padding-right: 8px;">支付宝</span>
						</div>
					</div>
				</div>
				<div class="subrow margintop30">
					<div class="subcol1"></div>
					<div class="subcol2">
						<input type="submit" class="c-button" value="开始充值">
					</div>
				</div>
			</form>
		</div>
		
		<div class="subcontent" style="display: none" id="subpagetp_sf_wx">
			<form id="sf_online_pay_form" method="post" onsubmit="return Pay.onlinePay('sf_wx');" target="_blank" action="/userrech/onlinePay.do">
				<input type="hidden"  name="rechId" id="sf_wx_rech_id" value="">
				<div class="subrow">
					<div class="subcol1"></div>
					<div class="subcol2">
						<img src="/static/images/bank/method_wx.jpg" width="533" height="114" alt="">
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">充值数额：</div>
					<div class="subcol2">
						<input id="sf_wx_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textfield1"> 
						<span class="validation">
							<img src="/static/images/iconwarning.jpg" width="17" height="15" alt=""> <span class="smalltxt red"> 单笔最高500000豆，如无法支付请降低额度。支付成功自动到账，无需提交存款信息!</span>
						</span>
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">支付帐户：</div>
					<div  class="subcol2">
						<div id="sfwx-subcol" class="banklist marginbtm10">
							<input class="bankradiobtn" type="radio" id="57" name="payId" value="57" code="WEIXIN" checked="checked" id="sfwx_radio">
							<i class="ico-weixin"></i>
							<span style="padding-right: 8px;">微信</span>
						</div>
					</div>
				</div>
				<div class="subrow margintop30">
					<div class="subcol1"></div>
					<div class="subcol2">
						<input type="submit" class="c-button" value="开始充值">
					</div>
				</div>
			</form>
		</div>
        
		<div class="subcontent" style="display: none" id="subpagetp_zf_wx">
			<form id="zf_online_pay_form" method="post" onsubmit="return Pay.onlinePay('zf_wx');" target="_blank" action="/userrech/onlinePay.do">
				<input type="hidden"  name="rechId" id="zf_wx_rech_id" value="">
				<div class="subrow">
					<div class="subcol1"></div>
					<div class="subcol2">
						<img src="/static/images/bank/method_wx.jpg" width="533" height="114" alt="">
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">充值数额：</div>
					<div class="subcol2">
						<input id="zf_wx_amount" name="amount" autocomplete="off" onkeypress="return isNumber(event)" type="text" class="textfield1"> 
						<span class="validation">
							<img src="/static/images/iconwarning.jpg" width="17" height="15" alt=""> <span class="smalltxt red"> 单笔最高5000000豆，如无法支付请降低额度。支付成功自动到账，无需提交存款信息!!!</span>
						</span>
					</div>
				</div>
				<div class="subrow">
					<div class="subcol1">支付帐户：</div>
					<div  class="subcol2">
						<div id="sfwx-subcol" class="banklist marginbtm10">
							<input class="bankradiobtn" type="radio" id="WEIXIN" name="payId" value="WEIXIN" code="WEIXIN" checked="checked" id="sfwx_radio">
							<i class="ico-weixin"></i>
							<span style="padding-right: 8px;">微信</span>
						</div>
					</div>
				</div>
				<div class="subrow margintop30">
					<div class="subcol1"></div>
					<div class="subcol2">
						<input type="submit" class="c-button" value="开始充值">
					</div>
				</div>
			</form>
		</div>
        
        <div class="subcontent" style="display: none" id="subpagetp_wx">
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2">
					<img src="/static/images/bank/method_wx.jpg" width="533" height="114" alt="">
				</div>
			</div>

			<div class="subrow">
				<div class="subcol1">支付帐户：</div>
				<div id="wx-subcol" class="subcol2" style="width: 120px"></div>
				<span class="validation" style="display: block; padding-top: 10px;">
					<img src="/static/images/iconwarning.jpg" width="17" height="15" alt=""> <span class="smalltxt red">大额微信支付提示转账成功后,需提交存款信息</span>
				</span>
			</div>
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2 smalltxt gray">
					温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥2000，请￥2000.68）谢谢！<br>
					<span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！
					</span>
				</div>
			</div>
			<div class="subrow margintop30">
				<div class="subcol1"></div>
				<div class="subcol2">
					<input type="submit" class="c-button" value="开始充值" onclick="Pay.showPayWindow();">
				</div>
			</div>
		</div>
        
		<div class="subcontent" style="display: none" id="subpagetp_zfb">
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2">
					<img src="/static/images/bank/method_zfb.jpg" width="533" height="114" alt="">
				</div>
			</div>

			<div class="subrow">
				<div class="subcol1">支付帐户：</div>
				<div id="aw-subcol" class="subcol2"></div>
			</div>
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2 smalltxt gray">
					温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br>
					<span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！
					</span>
				</div>
			</div>
			<div class="subrow margintop30">
				<div class="subcol1"></div>
				<div class="subcol2">
					<input type="submit" class="c-button" value="开始充值" onclick="Pay.showPayWindow();">
				</div>
			</div>
		</div>

        <div class="subcontent" style="display: none" id="subpagetp_cft">
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2">
					<img src="/static/images/bank/method_cft.jpg" width="533" height="114" alt="">
				</div>
			</div>

			<div class="subrow">
				<div class="subcol1">支付帐户：</div>
				<div id="cft-subcol" class="subcol2"></div>
			</div>
			<div class="subrow">
				<div class="subcol1"></div>
				<div class="subcol2 smalltxt gray">
					温馨提示：为确保财务第一时间为您添加游戏额度，请您尽量不要转账整数（例如：欲入￥5000，请￥5000.68）谢谢！<br>
					<span class="blue">友情提示：请每次入款前登录会员核对银行账号是否使用。入款至已过期账号，公司无法查收，恕不负责！<br>在您转账成功后，请点击“我已存款”，通知客服确认到账哦！
					</span>
				</div>
			</div>
			<div class="subrow margintop30">
				<div class="subcol1"></div>
				<div class="subcol2">
					<input type="submit" class="c-button" value="开始充值" onclick="Pay.showPayWindow();">
				</div>
			</div>
		</div>	
        
        </div>

	<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
var layer = parent.layer;
parent.UserBet.playType = "NORMAL";
</script>
<script type="text/javascript" src="/static/lib/util/md5.js"></script>
<script type="text/javascript" src="/static/lib/util/common.js"></script>
<script type="text/javascript" src="/static/lib/util/ctab.min.js"></script>
<!--  error.js要放在最后面  -->
<script type="text/javascript" src="/static/lib/util/error.js"></script>
	<script type="text/javascript" src="/static/js/center.js?v5"></script>
</body>
</html>