<?php
$lastNo=$this->getGameLastNo(56);
$opencode =$zddata?$zddata:randKeys(10);

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* 生成随机数 */
function randKeys($len){
    $array=array("1","2","3","4","5","6","7","8","9","10");
    $charsLen = count($array) - 1;
    shuffle($array);
    $output = "";
    //  for ($i=0; $i<$len; $i++){

    $a= $array[mt_rand(0, $charsLen)];
    $b= $array[mt_rand(0, $charsLen)];
    while($a==$b)
    {
        $b= $array[mt_rand(0, $charsLen)];
    }
    $c=$array[mt_rand(0, $charsLen)];
    while($c==$a||$c==$b)
    {
        $c= $array[mt_rand(0, $charsLen)];
    }

    $d= $array[mt_rand(0, $charsLen)];
    while($d==$a||$d==$b||$d==$c)
    {
        $d= $array[mt_rand(0, $charsLen)];
    }
    $e= $array[mt_rand(0, $charsLen)];
    while($e==$a||$e==$b||$e==$c||$e==$d)
    {
        $e= $array[mt_rand(0, $charsLen)];
    }
    $f= $array[mt_rand(0, $charsLen)];
    while($f==$a||$f==$b||$f==$c||$f==$d||$f==$e)
    {
        $f= $array[mt_rand(0, $charsLen)];
    }
    $g= $array[mt_rand(0, $charsLen)];
    while($g==$a||$g==$b||$g==$c||$g==$d||$g==$e||$g==$f)
    {
        $g= $array[mt_rand(0, $charsLen)];
    }
    $h= $array[mt_rand(0, $charsLen)];
    while($h==$a||$h==$b||$h==$c||$h==$d||$h==$e||$h==$f||$h==$g)
    {
        $h= $array[mt_rand(0, $charsLen)];
    }
    $i= $array[mt_rand(0, $charsLen)];
    while($i==$a||$i==$b||$i==$c||$i==$d||$i==$e||$i==$f||$i==$g||$i==$h)
    {
        $i= $array[mt_rand(0, $charsLen)];
    }
    $j= $array[mt_rand(0, $charsLen)];
    while($j==$a||$j==$b||$j==$c||$j==$d||$j==$e||$j==$f||$j==$g||$j==$h||$j==$i)
    {
        $j= $array[mt_rand(0, $charsLen)];
    }
    //$output .= $array[mt_rand(0, $charsLen)].",";
    //  }
    return $outpuet=$a.','.$b.','.$c.','.$d.','.$e.','.$f.','.$g.','.$h.','.$i.','.$j;
    // return rtrim($output, ',');
}
function js($rows,&$opencode,$LiRunLv){
	global $sumcount;
	global $sumabc;
	global $sumcodes;
	$zjcount=$bjAmount=$zjAmount=0;	
	if($rows!=null){
		for($i=0;$i<count($rows);$i++){
			$zjcount=$rows[$i]['betInfo']($rows[$i]['actionData'],$opencode,$rows[$i]['Groupname']);	
			$bjAmount+=$rows[$i]['money'];				
			$zjAmount+=$rows[$i]['money']*$rows[$i]['odds']*$zjcount;
		}
	}
	
	$bili=$zjAmount/$bjAmount;
	$gailv=$LiRunLv/100;
	$sumcount++;
	if($gailv<0 || $zjAmount==0 || $bjAmount == 0){
		return false;
	}else{
			
		$abc=floor($zjAmount)/floor($bjAmount);
		if($sumcount==1){
			$sumabc=$abc;
		}else if($sumcount>2){
			if($sumabc>$abc){
				$sumabc=$abc;
				$sumcodes=$opencode;
			}
		}

		if($sumcount>250000){
			if(count($sumcodes)>0){
				$opencode=$sumcodes;
			}
			return false;
		}else if($bili>$gailv){
			return true;
		}else{
			return false;
		}
	}
}
$flag=js($rows,$opencode,$LiRunLv);
while($flag==true){
	//var_dump("one");
	$opencode =$zddata?$zddata:randKeys(10);
	$flag=js($rows,$opencode,$LiRunLv);
}


function pk10gy($bet, $kj,$Groupname){
	$kj=explode(',',$kj);
	$val=intval($kj[0],10)+intval($kj[1],10);
	$zjcount=0;
	if($bet==$val){
		$zjcount=1;
		return $zjcount;
	}else if($bet=='冠亚大'){
		if($val>11 && $val<20) $zjcount=1;
		return $zjcount;
	}else if($bet=='冠亚小'){
		if($val>2 && $val<12) $zjcount=1;
		return $zjcount;
	}else if($bet=='冠亚单'){
		if($val%2!=0) $zjcount=1;
		return $zjcount;
	}else if($bet=='冠亚双'){
		if($val%2==0) $zjcount=1;
		return $zjcount;
	}else{
		
	}
	return $zjcount;
}

function pk10zh($betData, $kjData, $Groupname){
	$kj=explode(',',$kjData);
	$bet=$betData;
	$zjcount=0;
	$val='';
	$val2='';
if($Groupname=='冠军'){
	$val=intval($kj[0],10);
	$val2=intval($kj[9],10);
}else if($Groupname=='亚军'){
	$val=intval($kj[1],10);
	$val2=intval($kj[8],10); //8为第9个数	
}else if($Groupname=='第三名'){
	$val=intval($kj[2],10);
	$val2=intval($kj[7],10);
}else if($Groupname=='第四名'){	
	$val=intval($kj[3],10);
	$val2=intval($kj[6],10);
}else if($Groupname=='第五名'){	
	$val=intval($kj[4],10);
	$val2=intval($kj[5],10);
}else if($Groupname=='第六名'){	
	$val=intval($kj[5],10);
}else if($Groupname=='第七名'){	
	$val=intval($kj[6],10);
}else if($Groupname=='第八名'){	
	$val=intval($kj[7],10);
}else if($Groupname=='第九名'){	
	$val=intval($kj[8],10);
}else if($Groupname=='第十名'){	
	$val=intval($kj[9],10);
}
			if($bet==$val){
				$zjcount=1;
				return $zjcount;
			}else if($bet=='大'){
				if($val>=6 && $val<11) $zjcount=1;
				return $zjcount;
			}else if($bet=='小'){
				if($val>0 && $val<=5) $zjcount=1;
				return $zjcount;
			}else if($bet=='单'){
				if($val%2!=0) $zjcount=1;
				return $zjcount;
			}else if($bet=='双'){
				if($val%2==0) $zjcount=1;
				return $zjcount;
			}else if($bet=='龙'){
				if($val2>0){
				if($val>$val2) $zjcount=1;
				}
				return $zjcount;
			}else if($bet=='虎'){
				if($val2>0){
				if($val2>$val) $zjcount=1;
				}
				return $zjcount;
			}else{
				
			}
	return $zjcount;
}

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

?>
