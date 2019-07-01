<?php
// 请求数据赋值
$key = 'c28bc878dec0499e9b4bff3a4cc7592b';
$orderid        = trim($_GET['orderid']);
$opstate        = trim($_GET['opstate']);
$ovalue         = trim($_GET['ovalue']);
$sign           = trim($_GET['sign']);
if(empty($orderid)){
	die("opstate=-1");		//签名不正确，则按照协议返回数据}
}		
$sign_text	= "orderid=$orderid&opstate=$opstate&ovalue=$ovalue".$key;
$sign_md5 = md5($sign_text);
if($sign_md5 != $sign){
	die("opstate=-2");		//签名不正确，则按照协议返回数据
}	
if ($sign_md5 == $sign) 
{
	if ($opstate == 0)
	{
		
		require_once 'fun.php';
		Change($orderid,$ovalue);
		

	}
	
	echo "支付编号:".$orderid.'<br>';
	echo "支付状态:".($opstate==0?'成功':'失败').'<br>';
}
else
{
	echo '签名错误';
}
?>