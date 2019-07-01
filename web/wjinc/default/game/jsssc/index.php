
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

<!--main-->
<div class="main clearfix">
	<div class="content">
		<div class="sub-wrap clearfix">
			<!--cont-main-->
			<div class="cont-main">
					  <div id="subpage"> 
						   <div class="cont-col3"> 
						                   <table class="u-table2 play_tab_1">
			      <thead> 
			        <th align="left" style="padding-left: 20px;border-right: none;">
			        	 
			        	<span>
			        	&nbsp;&nbsp
			        	今日输赢：
			        	</span>
			        	<span id="total_sum_money" style="color: red;">0</span>
			        </th>
			        <th align="right" style="padding-right:20px; color:#626262; font-size:14px;font-weight:normal; border-left: none;">
			        	<span class="c-txt2" id="next_turn_num"></span>&nbsp;期
			        	距离封盘：<span class="c-txt1" id="bet-date">00:00</span>
			        	距离开奖：<span class="c-txt1" id="open-date">00:00</span>
			        </th>  
			      </thead> 
			     </table>
						    	<div class="cont-col3-hd clearfix"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money1" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn1" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
						    <div class="cont-col3-bd" id="bet_tab"> 
						     <table class="u-table2 play_tab_1">
						      <thead> 
						       <tr> 
						        <th colspan="12">总和-龙虎和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_2101" class="name">总和大</td> 
						        <td id="play_odds_2101" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2101" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_2102" class="name">总和小</td> 
						        <td id="play_odds_2102" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2102" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_2103" class="name">总和单</td> 
						        <td id="play_odds_2103" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2103" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_2104" class="name">总和双</td> 
						        <td id="play_odds_2104" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2104" class="amount"><input type="text" /></td> 
						       </tr> 
								<tr> 
						        <td id="play_name_2108" class="name">总和大单</td> 
						        <td id="play_odds_2108" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2108" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_2109" class="name">总和小单</td> 
						        <td id="play_odds_2109" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2109" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_2110" class="name">总和大双</td> 
						        <td id="play_odds_2110" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2110" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_2111" class="name">总和小双</td> 
						        <td id="play_odds_2111" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2111" class="amount"><input type="text" /></td> 
						       </tr> 
						       <tr> 
						        <td id="play_name_2105" class="name">龙</td> 
						        <td id="play_odds_2105" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2105" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_2106" class="name">虎</td> 
						        <td id="play_odds_2106" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2106" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_2107" class="name">和</td> 
						        <td id="play_odds_2107" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_2107" class="amount"><input type="text" /></td> 
						        
						        <td class="name not-event" colspan="3"></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
						     			<table class="u-table2 play_tab_2"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第一球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_2210" class="name">大</td> 
								          <td id="play_odds_2210" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2210" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2211" class="name">小</td> 
								          <td id="play_odds_2211" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2211" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2212" class="name">单</td> 
								          <td id="play_odds_2212" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2212" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2213" class="name">双</td> 
								          <td id="play_odds_2213" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2213" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2200" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_2200" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2200" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2201" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_2201" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2201" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2202" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_2202" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2202" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2203" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_2203" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2203" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2204" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_2204" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2204" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2205" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_2205" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2205" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2206" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_2206" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2206" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2207" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_2207" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2207" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2208" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_2208" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2208" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2209" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_2209" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2209" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_3"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第二球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_2310" class="name">大</td> 
								          <td id="play_odds_2310" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2310" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2311" class="name">小</td> 
								          <td id="play_odds_2311" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2311" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2312" class="name">单</td> 
								          <td id="play_odds_2312" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2312" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2313" class="name">双</td> 
								          <td id="play_odds_2313" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2313" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2300" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_2300" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2300" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2301" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_2301" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2301" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2302" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_2302" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2302" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2303" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_2303" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2303" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2304" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_2304" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2304" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2305" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_2305" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2305" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2306" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_2306" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2306" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2307" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_2307" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2307" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2308" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_2308" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2308" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2309" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_2309" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2309" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_4"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第三球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_2410" class="name">大</td> 
								          <td id="play_odds_2410" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2410" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2411" class="name">小</td> 
								          <td id="play_odds_2411" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2411" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2412" class="name">单</td> 
								          <td id="play_odds_2412" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2412" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2413" class="name">双</td> 
								          <td id="play_odds_2413" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2413" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2400" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_2400" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2400" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2401" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_2401" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2401" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2402" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_2402" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2402" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2403" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_2403" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2403" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2404" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_2404" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2404" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2405" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_2405" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2405" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2406" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_2406" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2406" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2407" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_2407" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2407" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2408" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_2408" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2408" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2409" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_2409" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2409" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_5"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第四球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_2510" class="name">大</td> 
								          <td id="play_odds_2510" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2510" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2511" class="name">小</td> 
								          <td id="play_odds_2511" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2511" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2512" class="name">单</td> 
								          <td id="play_odds_2512" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2512" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2513" class="name">双</td> 
								          <td id="play_odds_2513" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2513" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2500" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_2500" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2500" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2501" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_2501" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2501" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2502" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_2502" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2502" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2503" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_2503" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2503" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2504" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_2504" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2504" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2505" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_2505" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2505" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2506" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_2506" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2506" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2507" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_2507" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2507" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2508" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_2508" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2508" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2509" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_2509" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2509" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_6"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第五球</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_2610" class="name">大</td> 
								          <td id="play_odds_2610" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2610" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2611" class="name">小</td> 
								          <td id="play_odds_2611" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2611" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2612" class="name">单</td> 
								          <td id="play_odds_2612" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2612" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2613" class="name">双</td> 
								          <td id="play_odds_2613" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2613" class="amount"><input type="text" /></td>
								         </tr> 
								          <tr> 
								          <td id="play_name_2600" class="name"><span class="ball c-b1">0</span></td> 
								          <td id="play_odds_2600" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2600" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2601" class="name"><span class="ball c-b1">1</span></td> 
								          <td id="play_odds_2601" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2601" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2602" class="name"><span class="ball c-b1">2</span></td> 
								          <td id="play_odds_2602" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2602" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2603" class="name"><span class="ball c-b1">3</span></td> 
								          <td id="play_odds_2603" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2603" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2604" class="name"><span class="ball c-b1">4</span></td> 
								          <td id="play_odds_2604" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2604" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2605" class="name"><span class="ball c-b1">5</span></td> 
								          <td id="play_odds_2605" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2605" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2606" class="name"><span class="ball c-b1">6</span></td> 
								          <td id="play_odds_2606" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2606" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2607" class="name"><span class="ball c-b1">7</span></td> 
								          <td id="play_odds_2607" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2607" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2608" class="name"><span class="ball c-b1">8</span></td> 
								          <td id="play_odds_2608" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2608" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_2609" class="name"><span class="ball c-b1">9</span></td> 
								          <td id="play_odds_2609" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_2609" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     	</tr>
						     </table>
						     
						     	<!-- 前三中三后三 -->
	<table class="u-table2 play_tab_7" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">前三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_2701" class="name">豹子</td> 
        <td id="play_odds_2701" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2701" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2702" class="name">顺子</td> 
        <td id="play_odds_2702" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2702" class="amount"><input type="text" /></td>
        
        <td id="play_name_2703" class="name">对子</td> 
        <td id="play_odds_2703" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2703" class="amount"><input type="text" /></td>
         
        <td id="play_name_2704" class="name">半顺</td> 
        <td id="play_odds_2704" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2704" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2705" class="name">杂六</td> 
        <td id="play_odds_2705" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2705" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_8" style="margin-top: 10px;"> 
      <thead> 
       <tr> 
        <th colspan="15">中三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_2801" class="name">豹子</td> 
        <td id="play_odds_2801" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2801" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2802" class="name">顺子</td> 
        <td id="play_odds_2802" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2802" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2803" class="name">对子</td> 
        <td id="play_odds_2803" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2803" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2804" class="name">半顺</td> 
        <td id="play_odds_2804" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2804" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2805" class="name">杂六</td> 
        <td id="play_odds_2805" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2805" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table> 
     <table class="u-table2 play_tab_9" style="margin-top: 10px;" > 
      <thead> 
       <tr> 
        <th colspan="15">后三</th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td id="play_name_2901" class="name">豹子</td> 
        <td id="play_odds_2901" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2901" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2902" class="name">顺子</td> 
        <td id="play_odds_2902" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2902" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2903" class="name">对子</td> 
        <td id="play_odds_2903" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2903" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2904" class="name">半顺</td> 
        <td id="play_odds_2904" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2904" class="amount"><input type="text" /></td> 
        
        <td id="play_name_2905" class="name">杂六</td> 
        <td id="play_odds_2905" class="odds"><span class="c-txt3">--</span></td> 
        <td id="play_text_2905" class="amount"><input type="text" /></td> 
       </tr> 
      </tbody> 
     </table>  
						     <div class="cont-col3-hd clearfix" style="margin-top: 20px"> 
     <!-- 
        <div class="cont-col3-box1">
         	   投注类型：
            <a href="#" class="cur">快捷</a>
            <a href="#">一般</a>
        </div>
     --> 
     <div class="cont-col3-box2"> 
<!--       <label> <input type="checkbox" class="u-cb1" /> 预设 </label>  -->
      	金额 
      <input id="bet_money2" type="text" class="bet-money" /> 
      <a href="javascript:parent.UserBet.openBetWindow()" id="openBetWinBtn2" class="u-btn1">确定</a> 
      <a href="javascript:parent.UserBet.resetData()" class="u-btn1">重置</a> 
     </div> 
    </div> 
						     
						    </div> 
						   </div> 
						  </div>

					 <div id="game_count"> 
						

					</div> 
			</div>
			<!--/cont-main-->
			
			<div id="right_page" class="cont-sider">
	<div id="subpage" class="cp-box2"> 
    <div style="padding: 5px 0px;">
	<select id="historyQueryParamGameId" onchange="historyDateChange()">
	 </select>
	日期：
   	<input id="historyQueryParamOpenTime" onClick="WdatePicker({onpicking:function(dp){History.getHistoryData('',dp.cal.getNewDateStr())}})" onchange="">
 </div>
	<table class="u-table2 play_tab_10" id="history_table"> 
      <thead> 
       <tr> 
        <th>期数</th> 
        <th colspan="5" class="haoma">开出号码</th> 
		<th colspan="3" class="zonghe">总和</th> 
		<th colspan="1" class="lm">龙虎</th> 
        </tr> 
      </thead> 
      <tbody>
       
      </tbody> 
     </table> 
	 </div>
	<div id="kjtz-ctn" class="mt5 hide">
	<table class="u-table2 play_tab_85">
		<thead>
			<tr>
				<th colspan="3">快捷投注</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DANMA_PLAYIDS')"><span>单码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAODAN_PLAYIDS')"><span>小单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDAN_PLAYIDS')"><span>合单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SHUANMA_PLAYIDS')"><span>双码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOSHUAN_PLAYIDS')"><span>小双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HESHUAN_PLAYIDS')"><span>合双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'DAMA_PLAYIDS')"><span>大码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DADAN_PLAYIDS')"><span>大单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEDA_PLAYIDS')"><span>合大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'XIAOMA_PLAYIDS')"><span>小码</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'DASHUAN_PLAYIDS')"><span>大双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'HEXIAO_PLAYIDS')"><span>合小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'LINTOU_PLAYIDS')"><span>0头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LINWEI_PLAYIDS')"><span>0尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'WUWEI_PLAYIDS')"><span>5尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'YITOU_PLAYIDS')"><span>1头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'YIWEI_PLAYIDS')"><span>1尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LIUWEI_PLAYIDS')"><span>6尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'ERTOU_PLAYIDS')"><span>2头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'ERWEI_PLAYIDS')"><span>2尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'QIWEI_PLAYIDS')"><span>7尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SANTOU_PLAYIDS')"><span>3头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SANWEI_PLAYIDS')"><span>3尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'BAWEI_PLAYIDS')"><span>8尾</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'SITOU_PLAYIDS')"><span>4头</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'SIWEI_PLAYIDS')"><span>4尾</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'JIU_PLAYIDS')"><span>9尾</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鼠')"><span>鼠</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'龙')"><span>龙</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猴')"><span>猴</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'牛')"><span>牛</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'蛇')"><span>蛇</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'鸡')"><span>鸡</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'虎')"><span>虎</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'马')"><span>马</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'狗')"><span>狗</span></td>
			</tr>
			<tr>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'兔')"><span>兔</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'羊')"><span>羊</span></td>
				<td class="sx_btns" onclick="LHC_KJTZ.sxtz(this,'猪')"><span>猪</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONG')"><span>红</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN')"><span>蓝</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV')"><span>绿</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DAN')"><span>红单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DAN')"><span>蓝单</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DAN')"><span>绿单</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_SHUAN')"><span>红双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_SHUAN')"><span>蓝双</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_SHUAN')"><span>绿双</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_DA')"><span>红大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_DA')"><span>蓝大</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_DA')"><span>绿大</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'HONE_XIAO')"><span>红小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LAN_XIAO')"><span>蓝小</span></td>
				<td onclick="LHC_KJTZ.kjtz(this,'LV_XIAO')"><span>绿小</span></td>
			</tr>
			<tr>
				<td onclick="LHC_KJTZ.kjtz(this,'QUANGXUAN')"><span>全选</span></td>
				<td onclick="LHC_KJTZ.reverseSel(this,'QUANGXUAN')"><span>反选</span></td>
				<td onclick="LHC_KJTZ.cancelAll(this)"><span>取消</span></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
		</div>
	</div>
	<!--/content-->
</div>
<!--/main-->

<script type="text/javascript">
window.onload = function() {
	document.onkeydown = function (e) {
		var theEvent = window.event || e;
		var code = theEvent.keyCode || theEvent.which;
		if (code == 13) {
			if(parent.UserBet.step==0) {
				parent.UserBet.openBetWindow();
			}else if(parent.UserBet.step==1){
				parent.UserBet.submitBet();
				if(parent.UserBet.step==0){
					setTimeout(function() {
						parent.layer.closeAll();
			        }, 200);
				}
			}
		}
	}
}
</script>
<script type="text/javascript" src="/static/lib/moment.min.js"></script> 
<script type="text/javascript" src="/static/lib/util/httpUtil.js"></script>
<script type="text/javascript" src="/static/js/lottery/historyLimit.js"></script>
<script type="text/javascript" src="/static/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/util/calendar.js"></script>
<script type="text/javascript" src="/static/js/lottery/lhc/lhc.js"></script>
<script type="text/javascript">
function initGameSelect(obj){
	var optionFormatStr='<option value="{gameId}">{gameName}</option>';
	var optionStr="";
	for(var g in games){
		var game=games[g];
		if(game.open==0){
			optionStr+=optionFormatStr.format({
				"gameId":game.id,
				"gameName":game.name
			});
		}
	}
	$(obj).html(optionStr);
}
</script>
<script type="text/javascript">
 	initGameSelect("#historyQueryParamGameId");
 	function historyDateChange(){
 		var date=$('#historyQueryParamOpenTime').val();
 		var gameId=$("#historyQueryParamGameId").val();
		History.getHistoryData(gameId,date);
 	}
 </script>
<script type="text/javascript">
	function getData(){
		var date=HttpUtil.GetUrlPara()["date"];  
		History.getHistoryData(73,date);
		setTimeout("getData()",5000);
	}
	getData();
</script>
</body>
</html>