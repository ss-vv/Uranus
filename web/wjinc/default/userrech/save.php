<?php
$this->freshSession();
if($this->user['uid']){
$rechargeId=$this->getRechId();
$uid=$this->user['uid'];
$amount=floatval($_POST['amount']);
$cfgId=$_POST['cfgId'];
$time=date('Y-m-d H:i:s', time());
$username=$_POST['username'];
$depositTime=$_POST['depositTime'];
	if($amount && $uid && $rechargeId && $depositTime && $username){
		$para=array();
		$para['amount']=$amount;
		$para['rechargeId']=$rechargeId;
		$para['actionTime']=$this->time;
		$para['uid']=$this->user['uid'];
		$para['username']=$this->user['username'];
		$para['actionIP']=$this->ip(true);
		if($cfgId=='281'){
			$para['info']='支付宝转账充值';
			$para['depositinfo']='支付宝昵称:'.$username.'<br>存款时间:'.$depositTime;
		}else if($cfgId=='288'){
			$para['info']='微信转账充值';
			$para['depositinfo']='微信昵称:'.$username.'<br>存款时间:'.$depositTime;
		}
		
		$para['rechType']='alipay';
		if($this->insertRow($this->prename .'member_recharge', $para)){
			echo '存款信息提交成功，请等待客服审核';
			exit;
		}else{
			echo '提交失败,请联系客服处理';
			exit;
		}		
	}else{
			echo '提交失败';
			exit;
		}	
}
?>