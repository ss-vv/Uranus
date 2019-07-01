<?php
function cut($start,$end,$file){
$content=explode($start,$file);
$content=explode($end,$content[1]);
return  $content[0];
}
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


header("Content-type: application/xml");
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$qihao.'" opencode="'.$haoma.'" opentime="'.$time.'" /></xml>';
ob_end_flush();
;echo '
'
?>