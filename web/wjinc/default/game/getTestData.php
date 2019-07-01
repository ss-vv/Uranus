<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2017/5/10
 * Time: 18:35
 */

$temp1 = $this->getRows("select id from ssc_type where enable=1 and isDelete=0");
echo json_encode($temp1);