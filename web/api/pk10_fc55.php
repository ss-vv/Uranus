<?php
header('content-type:text/xml;charset=utf8');
$api = 'http://www.fc55.com/ajax/Getpk10AwardData';
$resource = file_get_contents( $api ); 
$data = json_decode( $resource , 1 );
$data=$data['current'];
$limit=strlen($data['periodNumber'])-0;
$ct=substr($data['periodNumber'],0,$limit).''.substr($data['periodNumber'],$limit,$limit+0);

$cr = $data['awardNumbers'];

	function tmp($v){
		 return 10>$v?"0{$v}":$v;
	}
	$cr=implode(',',array_map('tmp',array_slice(explode(',',$cr),0,20)));

echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.$data['awardTime'].'"/>
</xml>';
