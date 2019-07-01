<?
$api = 'http://api.api68.com/klsf/getLotteryInfo.do?lotCode=10009';
$resource = file_get_contents( $api );  
$data = json_decode( $resource , 1 );


$data = $data['result']['data'];

header('Content-Type: text/xml;charset=utf8');
$limit=strlen($ct)-0;

//$ct=substr($ct,0,$limit).''.substr($ct,$limit,$limit+0);

//function tmp($v){
//		 return 10>$v?"0{$v}":$v;
//}
//$cr=implode(',',array_map('tmp',array_slice(explode(',',$cr),0,20)));
echo '<xml>
<row expect="'.substr($data['preDrawIssue'],2,strlen($data['preDrawIssue'])-2).'" opencode="'.$data['preDrawCode'].'" opentime="'.$data['drawTime'].'"/>
</xml>';