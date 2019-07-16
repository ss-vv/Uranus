<?php
class Userrech extends WebLoginBase{
	
	public final function getUserRechCfgdo(){
		$this->display('userrech/getUserRechCfg.php');
	}
	
	public final function getRechListdo(){
		$this->display('userrech/getRechList.php');
	}
	
	public final function getRechDetaildo(){
		$this->display('userrech/getRechDetail.php');
	}

	public final function detaildo(){
		$this->display('userrech/detail.php');
	}
	
	public final function getStatBetsdo(){
		$this->display('userrech/getStatBets.php');
	}

	public final function getTotalStatBetsdo(){
		$this->display('userrech/getTotalStatBets.php');
	}
	
	public final function onlinePaydo(){
		$this->display('userrech/onlinePay.php');
	}
	
	public final function savedo(){
		$this->display('userrech/save.php');
	}

	public final function getRechId(){
		$rechargeId=date('YmdHis').mt_rand(1000,9999);
		if($this->getRow("select id from {$this->prename}member_recharge where rechargeId=$rechargeId")){
			getRechId();
		}else{
			return $rechargeId;
		}
	}
}
?>
