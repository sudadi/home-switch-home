<?php

include('config.php');

if(isset($_POST['value']) && isset($_POST['col']))
{
$value=$_POST['value'];
$col=$_POST['col'];
if ($result=$db->query("update switch set switch='".$value."' , timer=0 where id=".$col.";")) {
if ($value==1) {
	$status="OFF";
} else {
	$status="ON";
}
echo "You Have Turned ".$status." Light Switch (".$col.")";
}
}
?>