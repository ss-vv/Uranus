<?php
$this->freshSession();



if($this->user['uid']){
$rechargeId=$this->getRechId();
$bankid=$_REQUEST["payId"];
$uid=$this->user['uid'];
$amount=floatval($_REQUEST['amount']);
$time=date('Y-m-d H:i:s', time());

if($amount && $uid && $rechargeId){
	if($this->update("INSERT INTO {$this->prename}order (order_number, username, recharge_amount, state, time) VALUES('{$rechargeId}', '{$uid}', '{$amount}', '0', '{$time}')")){
		$para=array();
		$para['mBankId']=intval($bankid);
		$para['amount']=floatval($amount);
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($bankid==992 || $bankid=='ZHIFUBAO'){
		$para['info']='支付宝扫码充值';
		}elseif($bankid==1004 || $bankid=='WEIXIN'){
		$para['info']='微信扫码充值';
		}else{
		$para['info']='用户在线充值';
		}
		
		$parter = '1923';
   $key = 'c28bc878dec0499e9b4bff3a4cc7592b';
   $callbackurl = "http://".$_SERVER['HTTP_HOST']."/wjinc/default/userrech/Back.php";
   $hrefbackurl = "http://".$_SERVER['HTTP_HOST']."/wjinc/default/userrech/return.php";

   $signStr = "parter=$parter&type=$bankid&value=$amount&orderid=$rechargeId&callbackurl=$callbackurl";

   $sign	= md5($signStr.$key);

		if($this->insertRow($this->prename .'member_recharge', $para)){
			
			   $url="http://www.cqweide.com/bank?" . $signStr . "&sign=" .$sign. "&hrefbackurl=".$hrefbackurl;
				header("Location: ".$url); 
						
			
		}else{
			echo '充值订单生成出错';
			exit;
		}		
	}else{
	echo '操作错误';
	exit;	
	}
}
}
?>