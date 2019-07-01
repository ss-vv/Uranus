<?php

	$con = mysql_connect("127.0.0.1","root",'lottery**abc');
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db("boe2017", $con);
	mysql_query("set names 'utf8'");
	
	Change('832153','500');
	
	function Change($orderid ,$ovalue)
	{
		$addtime = time();
	 	$result2 = mysql_query("select * from ssc_order where order_number='{$orderid}' and state = 0");	
		if(mysql_num_rows($result2) == 1)
		{      
			$row = mysql_fetch_array($result2);
			$ovalue = $row['recharge_amount'];
			mysql_query("update ssc_order set state=1 where order_number='{$orderid}' and state = 0");
			mysql_query("update ssc_member_recharge set state='9',rechargeAmount={$ovalue},actionTime={$addtime},rechargeTime={$addtime} where  rechargeId='".$orderid."'"); 
	        mysql_query("update ssc_members set coin=coin+{$ovalue} where  uid={$row['username']}");	        
			$r  = mysql_query("select coin from ssc_members where  uid={$row['username']}");
			$rr = mysql_fetch_array($r);			
			mysql_query("insert into ssc_coin_log (`id`,`uid`,`type`,`playedId`,`coin`,`userCoin`,`fcoin`,`liqType`,`actionUID`,`actionTime`,`actionIP`,`info`,`extfield0`,`extfield1`,`extfield2`) values(null,'{$row['username']}','0','0','{$ovalue}','{$rr['coin']}','0','1','0','".time()."','0','充值','258','','0')");
        }
		
	}
	
	
	
	
?>