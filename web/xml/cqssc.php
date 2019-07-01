<?
$api = 'http://api.api68.com/CQShiCai/getBaseCQShiCai.do?lotCode=10002';
$resource = file_get_contents( $api );  
$data = json_decode( $resource , 1 );

$rq=$data['result']['data']['preDrawIssue'];

$hm=$data['result']['data']['preDrawCode'];

$sj=$data['result']['data']['preDrawTime'];

header('Content-Type:text/xml;charset=utf8');

$hm=substr($hm,0,59);


echo '<xml>
<row expect="'.$rq.'" opencode="'.$hm.'" opentime="'.str_replace('/','-',$sj).'"/>
</xml>';