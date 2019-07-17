<?php
$this->type = $gameId = intval($_GET['gameId']);
if (intval($_GET['dateStr'])) {
    $datenum = intval($_GET['dateStr']);
    $dateStr = strtotime(date('Y-m-d 00:00:00', strtotime(intval($_GET['dateStr']))));
    $dateStr2 = strtotime(date('Y-m-d 23:59:59', strtotime(intval($_GET['dateStr']))));

} else {
    $datenum = date('Ymd', time());
    $dateStr = strtotime(date('Y-m-d 00:00:00', time()));
    $dateStr2 = strtotime(date('Y-m-d 23:59:59', time()));

}
if ($this->type == 70 || $this->type == 74) {
    $data = $this->getRows("select * from {$this->prename}data where type={$this->type} order by number desc,time desc limit 20");
	for($i=0;$i<count($data);$i++){
		$data[$i]['number']=substr($data[$i]['number'],8);
	}
	
} elseif ($this->type == 1 || $this->type == 55 ) {
    $data = $this->getRows("select * from {$this->prename}data where type={$this->type} and number like '{$datenum}%' order by number desc,time desc limit 20");
	for($i=0;$i<count($data);$i++){
		$data[$i]['number']=substr($data[$i]['number'],8);
	}
	
} else {
    $data = $this->getRows("select * from {$this->prename}data where type={$this->type} and time >= '{$dateStr}' and time <= '{$dateStr2}' order by number desc,time desc limit 20");
	for($i=0;$i<count($data);$i++){
		$data[$i]['number']=substr($data[$i]['number'],0);
	}
}
$types = $this->getTypes();
$kjdTime = $types[$gameId]['data_ftime'];
$alldata = array();
$historyData = array();
$historyData['id'] = null;
$historyData['betEndTime'] = null;
$historyData['turnNum'] = null;
$historyData['openNum'] = null;
$historyData['openTime'] = null;
$historyData['gameId'] = $this->type;
$historyData['status'] = 2;
$historyData['remark'] = null;

$historyData['statDate'] = date("Y-m-d H:i:s", time());
/*for($i = 1; $i <= 20; $i++){
	echo '$n'.$i.'=';
}*/
$historyData2 = '';
foreach ($data as $key => $value) {
    //echo $value['number'];
    //echo date("Y-m-d H:i:s",$value['time'])."\r\n";
    $lastNo = $this->getGameLastNo($gameId, $value['time']);
    $diffTime = strtotime($lastNo['actionTime']) - $kjdTime;
    //echo $lastNo['actionNo'].'_'.$lastNo['actionTime'].'<br>';

    $historyData['id'] = intval($value['id']);
    $historyData['betEndTime'] = date("Y-m-d H:i:s", $diffTime);
    $historyData['turnNum'] = $value['number'];
    $historyData['openNum'] = $value['data'];
    $historyData['openTime'] = date("Y-m-d H:i:s", strtotime($lastNo['actionTime']));
    $nums = explode(',', $value['data']);
    foreach ($nums as $keynum => $n) {
        $historyData['n' . ($keynum + 1)] = intval($n);
    }
    array_push($alldata, $historyData);

}

echo 'var historyData = ' . json_encode($alldata) . ';
jsonpCallback(historyData);';

?>
