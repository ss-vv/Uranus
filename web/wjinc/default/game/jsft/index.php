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
						     <table class="u-table2 play_tab_101"> 
						      <thead> 
						       <tr> 
						        <th colspan="12">冠、亚军和</th> 
						       </tr> 
						      </thead> 
						      <tbody> 
						       <tr> 
						        <td id="play_name_8092373" class="name">冠亚大</td> 
						        <td id="play_odds_8092373" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_8092373" class="amount"><input type="text" /></td> 
						        
						        <td id="play_name_8092374" class="name">冠亚小</td> 
						        <td id="play_odds_8092374" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_8092374" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_8092375" class="name">冠亚单</td> 
						        <td id="play_odds_8092375" class="odds" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_8092375" class="amount"><input type="text" /></td>
						         
						        <td id="play_name_8092376" class="name">冠亚双</td> 
						        <td id="play_odds_8092376" class="odds" class="odds"><span class="c-txt3">--</span></td> 
						        <td id="play_text_8092376" class="amount"><input type="text" /></td> 
						       </tr> 
						      </tbody> 
						     </table> 
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
								     <table class="u-table2 play_tab_11"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">冠军</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092404" class="name">大</td> 
								          <td id="play_odds_8092404" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092404" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092405" class="name">小</td> 
								          <td id="play_odds_8092405" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092405" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092406" class="name">单</td> 
								          <td id="play_odds_8092406" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092406" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092407" class="name">双</td> 
								          <td id="play_odds_8092407" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092407" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092408" class="name">龙</td> 
								          <td id="play_odds_8092408" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092408" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092409" class="name">虎</td> 
								          <td id="play_odds_8092409" class="odds" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092409" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_12"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">亚军</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092420" class="name">大</td> 
								          <td id="play_odds_8092420" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092420" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092421" class="name">小</td> 
								          <td id="play_odds_8092421" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092421" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092422" class="name">单</td> 
								          <td id="play_odds_8092422" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092422" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092423" class="name">双</td> 
								          <td id="play_odds_8092423" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092423" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092424" class="name">龙</td> 
								          <td id="play_odds_8092424" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092424" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092425" class="name">虎</td> 
								          <td id="play_odds_8092425" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092425" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_13"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第三名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092436" class="name">大</td> 
								          <td id="play_odds_8092436" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092436" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092437" class="name">小</td> 
								          <td id="play_odds_8092437" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092437" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092438" class="name">单</td> 
								          <td id="play_odds_8092438" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092438" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092439" class="name">双</td> 
								          <td id="play_odds_8092439" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092439" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092440" class="name">龙</td> 
								          <td id="play_odds_8092440" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092440" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092441" class="name">虎</td> 
								          <td id="play_odds_8092441" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092441" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_14"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第四名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092452" class="name">大</td> 
								          <td id="play_odds_8092452" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092452" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092453" class="name">小</td> 
								          <td id="play_odds_8092453" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092453" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092454" class="name">单</td> 
								          <td id="play_odds_8092454" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092454" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092455" class="name">双</td> 
								          <td id="play_odds_8092455" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092455" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092456" class="name">龙</td> 
								          <td id="play_odds_8092456" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092456" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092457" class="name">虎</td> 
								          <td id="play_odds_8092457" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092457" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		<td>
								     <table class="u-table2 play_tab_15"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第五名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092468" class="name">大</td> 
								          <td id="play_odds_8092468" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092468" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092469" class="name">小</td> 
								          <td id="play_odds_8092469" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092469" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092470" class="name">单</td> 
								          <td id="play_odds_8092470" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092470" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092471" class="name">双</td> 
								          <td id="play_odds_8092471" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092471" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092472" class="name">龙</td> 
								          <td id="play_odds_8092472" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092472" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092473" class="name">虎</td> 
								          <td id="play_odds_8092473" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092473" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     	</tr>
						     </table>
						     
						     <table class="cont-list1">
						     	<tr>
						     		<td>
						     			<table class="u-table2 play_tab_16"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第六名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092484" class="name">大</td> 
								          <td id="play_odds_8092484" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092484" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092485" class="name">小</td> 
								          <td id="play_odds_8092485" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092485" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092486" class="name">单</td> 
								          <td id="play_odds_8092486" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092486" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092487" class="name">双</td> 
								          <td id="play_odds_8092487" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092487" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_17"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第七名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092498" class="name">大</td> 
								          <td id="play_odds_8092498" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092498" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092499" class="name">小</td> 
								          <td id="play_odds_8092499" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092499" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092500" class="name">单</td> 
								          <td id="play_odds_8092500" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092500" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092501" class="name">双</td> 
								          <td id="play_odds_8092501" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092501" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_18"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第八名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092512" class="name">大</td> 
								          <td id="play_odds_8092512" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092512" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092513" class="name">小</td> 
								          <td id="play_odds_8092513" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092513" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092514" class="name">单</td> 
								          <td id="play_odds_8092514" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092514" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092515" class="name">双</td> 
								          <td id="play_odds_8092515" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092515" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_19"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第九名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092526" class="name">大</td> 
								          <td id="play_odds_8092526" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092526" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092527" class="name">小</td> 
								          <td id="play_odds_8092527" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092527" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092528" class="name">单</td> 
								          <td id="play_odds_8092528" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092528" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092529" class="name">双</td> 
								          <td id="play_odds_8092529" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092529" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody>
								       </table>
						     		</td>
						     		
						     		<td>
						     			<table class="u-table2 play_tab_20"> 
								        <thead> 
								         <tr> 
								          <th colspan="3">第十名</th> 
								         </tr> 
								        </thead> 
								        <tbody> 
								         <tr> 
								          <td id="play_name_8092540" class="name">大</td> 
								          <td id="play_odds_8092540" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092540" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092541" class="name">小</td> 
								          <td id="play_odds_8092541" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092541" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092542" class="name">单</td> 
								          <td id="play_odds_8092542" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092542" class="amount"><input type="text" /></td>
								         </tr> 
								         <tr> 
								          <td id="play_name_8092543" class="name">双</td> 
								          <td id="play_odds_8092543" class="odds"><span class="c-txt3">--</span></td> 
								          <td id="play_text_8092543" class="amount"><input type="text" /></td>
								         </tr> 
								        </tbody> 
								       </table>
						     		</td>
						     	</tr>
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
						 <div class="count-wrap">
					  <table class="u-table2" id="stat_qiu">
                           <thead>
                               <tr>
                                   <th class="u-tb3-th2 select" id="qiu1_th" onclick="StatGame.showStat(1)" qiu="1">冠军</th>
                                   <th class="u-tb3-th2" id="qiu2_th" onclick="StatGame.showStat(2)"  qiu="2">亚军</th>
                                   <th class="u-tb3-th2" id="qiu3_th" onclick="StatGame.showStat(3)"  qiu="3">第三名</th>
                                   <th class="u-tb3-th2" id="qiu4_th" onclick="StatGame.showStat(4)" qiu="4">第四名</th>
                                   <th class="u-tb3-th2" id="qiu5_th" onclick="StatGame.showStat(5)" qiu="5">第五名</th>
                                   <th class="u-tb3-th2" id="qiu6_th" onclick="StatGame.showStat(6)" qiu="6">第六名</th>
                                   <th class="u-tb3-th2" id="qiu7_th" onclick="StatGame.showStat(7)" qiu="7">第七名</th>
                                   <th class="u-tb3-th2" id="qiu8_th" onclick="StatGame.showStat(8)" qiu="8">第八名</th>
                                   <th class="u-tb3-th2" id="qiu9_th" onclick="StatGame.showStat(9)" qiu="9">第九名</th>
                                   <th class="u-tb3-th2" id="qiu10_th" onclick="StatGame.showStat(10)" qiu="10">第十名</th>
                               </tr>
                           </thead>
                       </table>
                       <table class="u-table4">
                           <tbody>
                               <tr>
                                   <td class="f1 fwb">1</td>
                                   <td class="f1 fwb">2</td>
                                   <td class="f1 fwb">3</td>
                                   <td class="f1 fwb">4</td>
                                   <td class="f1 fwb">5</td>
                                   <td class="f1 fwb">6</td>
                                   <td class="f1 fwb">7</td>
                                   <td class="f1 fwb">8</td>
                                   <td class="f1 fwb">9</td>
                                   <td class="f1 fwb">10</td>
                               </tr>
                                <tr id="qiu1_body" >
                                   <td id="q1_1_time">0</td>
                                   <td id="q1_2_time">0</td>
                                   <td id="q1_3_time">0</td>
                                   <td id="q1_4_time">0</td>
                                   <td id="q1_5_time">0</td>
                                   <td id="q1_6_time">0</td>
                                   <td id="q1_7_time">0</td>
                                   <td id="q1_8_time">0</td>
                                   <td id="q1_9_time">0</td>
                                   <td id="q1_10_time">0</td>
                               </tr>
                               <tr id="qiu2_body" class="hide">
                                   <td id="q2_1_time">0</td>
                                   <td id="q2_2_time">0</td>
                                   <td id="q2_3_time">0</td>
                                   <td id="q2_4_time">0</td>
                                   <td id="q2_5_time">0</td>
                                   <td id="q2_6_time">0</td>
                                   <td id="q2_7_time">0</td>
                                   <td id="q2_8_time">0</td>
                                   <td id="q2_9_time">0</td>
                                   <td id="q2_10_time">0</td>
                               </tr>
                               <tr id="qiu3_body" class="hide">
                                   <td id="q3_1_time">0</td>
                                   <td id="q3_2_time">0</td>
                                   <td id="q3_3_time">0</td>
                                   <td id="q3_4_time">0</td>
                                   <td id="q3_5_time">0</td>
                                   <td id="q3_6_time">0</td>
                                   <td id="q3_7_time">0</td>
                                   <td id="q3_8_time">0</td>
                                   <td id="q3_9_time">0</td>
                                   <td id="q3_10_time">0</td>
                               </tr>
                               <tr id="qiu4_body" class="hide">
                                   <td id="q4_1_time">0</td>
                                   <td id="q4_2_time">0</td>
                                   <td id="q4_3_time">0</td>
                                   <td id="q4_4_time">0</td>
                                   <td id="q4_5_time">0</td>
                                   <td id="q4_6_time">0</td>
                                   <td id="q4_7_time">0</td>
                                   <td id="q4_8_time">0</td>
                                   <td id="q4_9_time">0</td>
                                   <td id="q4_10_time">0</td>
                               </tr>
                               <tr id="qiu5_body" class="hide">
                                   <td id="q5_1_time">0</td>
                                   <td id="q5_2_time">0</td>
                                   <td id="q5_3_time">0</td>
                                   <td id="q5_4_time">0</td>
                                   <td id="q5_5_time">0</td>
                                   <td id="q5_6_time">0</td>
                                   <td id="q5_7_time">0</td>
                                   <td id="q5_8_time">0</td>
                                   <td id="q5_9_time">0</td>
                                   <td id="q5_10_time">0</td>
                               </tr>
                               <tr id="qiu6_body" class="hide">
                                   <td id="q6_1_time">0</td>
                                   <td id="q6_2_time">0</td>
                                   <td id="q6_3_time">0</td>
                                   <td id="q6_4_time">0</td>
                                   <td id="q6_5_time">0</td>
                                   <td id="q6_6_time">0</td>
                                   <td id="q6_7_time">0</td>
                                   <td id="q6_8_time">0</td>
                                   <td id="q6_9_time">0</td>
                                   <td id="q6_10_time">0</td>
                               </tr>
                               <tr id="qiu7_body" class="hide">
                                   <td id="q7_1_time">0</td>
                                   <td id="q7_2_time">0</td>
                                   <td id="q7_3_time">0</td>
                                   <td id="q7_4_time">0</td>
                                   <td id="q7_5_time">0</td>
                                   <td id="q7_6_time">0</td>
                                   <td id="q7_7_time">0</td>
                                   <td id="q7_8_time">0</td>
                                   <td id="q7_9_time">0</td>
                                   <td id="q7_10_time">0</td>
                               </tr>
                               <tr id="qiu8_body" class="hide">
                                   <td id="q8_1_time">0</td>
                                   <td id="q8_2_time">0</td>
                                   <td id="q8_3_time">0</td>
                                   <td id="q8_4_time">0</td>
                                   <td id="q8_5_time">0</td>
                                   <td id="q8_6_time">0</td>
                                   <td id="q8_7_time">0</td>
                                   <td id="q8_8_time">0</td>
                                   <td id="q8_9_time">0</td>
                                   <td id="q8_10_time">0</td>
                               </tr>
                               <tr id="qiu9_body" class="hide">
                                   <td id="q9_1_time">0</td>
                                   <td id="q9_2_time">0</td>
                                   <td id="q9_3_time">0</td>
                                   <td id="q9_4_time">0</td>
                                   <td id="q9_5_time">0</td>
                                   <td id="q9_6_time">0</td>
                                   <td id="q9_7_time">0</td>
                                   <td id="q9_8_time">0</td>
                                   <td id="q9_9_time">0</td>
                                   <td id="q9_10_time">0</td>
                               </tr>
                               <tr id="qiu10_body" class="hide">
                                   <td id="q10_1_time">0</td>
                                   <td id="q10_2_time">0</td>
                                   <td id="q10_3_time">0</td>
                                   <td id="q10_4_time">0</td>
                                   <td id="q10_5_time">0</td>
                                   <td id="q10_6_time">0</td>
                                   <td id="q10_7_time">0</td>
                                   <td id="q10_8_time">0</td>
                                   <td id="q10_9_time">0</td>
                                   <td id="q10_10_time">0</td>
                               </tr>
                           </tbody>
                       </table>
                       
                      <table class="u-table2 mt5">
                           <thead>
                               <tr id="stat_type">
                                   <th class="u-tb3-th2" id="stat_nums_btn" type="nums" onclick="StatGame.showStatType(this)">第一球</th>
                                   <th class="u-tb3-th2" id="stat_size_btn" type="size" onclick="StatGame.showStatType(this)">大小</th>
                                   <th class="u-tb3-th2" id="stat_firsts_btn" type="firsts" onclick="StatGame.showStatType(this)">单双</th>
                                   <th class="u-tb3-th2" id="stat_gyh_btn" type="gyh" onclick="StatGame.showStatType(this)">冠、亚军和</th>
                                   <th class="u-tb3-th2 select" id="stat_gyhdx_btn" type="gyhdx" onclick="StatGame.showStatType(this)">冠、亚军和 大小</th>
                                   <th class="u-tb3-th2" id="stat_gyhds_btn" type="gyhds" onclick="StatGame.showStatType(this)">冠、亚军和 单双</th>
                               </tr>
                           </thead>
                       </table>
                       <table class="u-table4 table-td-valign-top">
                           <tbody>
                               <tr id="qiu1_nums" class="stattd hide"></tr>
                               <tr id="qiu2_nums" class="stattd hide"></tr>
                               <tr id="qiu3_nums" class="stattd hide"></tr>
                               <tr id="qiu4_nums" class="stattd hide"></tr>
                               <tr id="qiu5_nums" class="stattd hide"></tr>
                               <tr id="qiu6_nums" class="stattd hide"></tr>
                               <tr id="qiu7_nums" class="stattd hide"></tr>
                               <tr id="qiu8_nums" class="stattd hide"></tr>
                               <tr id="qiu9_nums" class="stattd hide"></tr>
                               <tr id="qiu10_nums" class="stattd hide"></tr>
                               <tr id="qiu1_size" class="stattd hide"></tr>
                               <tr id="qiu2_size" class="stattd hide"></tr>
                               <tr id="qiu3_size" class="stattd hide"></tr>
                               <tr id="qiu4_size" class="stattd hide"></tr>
                               <tr id="qiu5_size" class="stattd hide"></tr>
                               <tr id="qiu6_size" class="stattd hide"></tr>
                               <tr id="qiu7_size" class="stattd hide"></tr>
                               <tr id="qiu8_size" class="stattd hide"></tr>
                               <tr id="qiu9_size" class="stattd hide"></tr>
                               <tr id="qiu10_size" class="stattd hide"></tr>
                               <tr id="qiu1_firsts" class="stattd hide"></tr>
                               <tr id="qiu2_firsts" class="stattd hide"></tr>
                               <tr id="qiu3_firsts" class="stattd hide"></tr>
                               <tr id="qiu4_firsts" class="stattd hide"></tr>
                               <tr id="qiu5_firsts" class="stattd hide"></tr>
                               <tr id="qiu6_firsts" class="stattd hide"></tr>
                               <tr id="qiu7_firsts" class="stattd hide"></tr>
                               <tr id="qiu8_firsts" class="stattd hide"></tr>
                               <tr id="qiu9_firsts" class="stattd hide"></tr>
                               <tr id="qiu10_firsts" class="stattd hide"></tr>
                               <tr id="qiu1_gyh" class="stattd hide"></tr>
                               <tr id="qiu1_gyhdx" class="stattd "><strong style="color:red">从左往右</strong></tr>
                               <tr id="qiu1_gyhds" class="stattd hide"></tr>
                           </tbody>
                       </table>
                  </div>

					</div> 
			</div>
			<!--/cont-main-->
			
			<div id="right_page" class="cont-sider">
	<div class="sider-box1 mt5" id="stat_play_ctn" style="display:none">
		<table class="u-table2">
			<thead> 
	         <tr> 
	          <th id="stat_play_list_desc">第一球</th> 
	         </tr> 
	        </thead> 
		</table>
		<table class="u-table5">
			<tbody id="stat_play_list">
			</tbody>
		</table>
	</div>
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
        <th colspan="10" >开出号码</th> 
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
<script type="text/javascript" src="/static/js/lottery/jsft/stat.js" async="async"></script>

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
		History.getHistoryData(56,date);
		setTimeout("getData()",5000);
	}
	getData();
</script>
</body>
</html>