<?php




header('content-type:text/xml;charset=utf8');

$api = 'http://www.0419weizan.com/gdkl10_168.php';



$resource = file_get_contents( $api ); 



$data = json_decode( $resource , 1 );



echo '<xml>
<row expect="'.$data['l_t'].'" opencode="'.$data['l_r'].'" opentime="'.$data['l_d'].'"/>
</xml>';
