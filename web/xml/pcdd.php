<?php

$api = 'https://api.zao28.com/News?name=xy28&type=json';

$json = file_get_contents( $api );
$json = json_decode($json,true);


$issue = $data['issue'];

header('Content-Type: text/xml;charset=utf8');


echo '<xml>
<row expect="'.$issue.'" opencode="'.$kjcodes.'" opentime=""/>
</xml>';

?>
