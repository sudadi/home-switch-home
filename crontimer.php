<?php
include('config.php');
$i=1;
date_default_timezone_set("Asia/Bangkok");
$curtime = date('H:i:s');
//echo $curtime."\n";
$query = "select * from switch";
if ($result = $db->query($query)) {
	while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		echo $row["switch"];
		if (($row["start"] != $row["stop"]) && ($row["timer"] == true)) {
			if (($row["stop"] - $row["start"]) > 0) {
				if (($curtime > $row["start"]) && ($curtime < $row["stop"])) {
					if ($row["switch"] != '0') { 
					   $db->query("update switch set switch='0' where id=".$i);
					}
				} else {
					if ($row["switch"] != '1') {
					    $db->query("update switch set switch='1' where id=".$i);
					}
				}
			} else {
				if (($curtime > $row["start"]) || ($curtime < $row["stop"])) {
					if ($row["switch"] != '0') { 
					   $db->query("update switch set switch='0' where id=".$i);
					}
				} else {
					if ($row["switch"] != '1') { 
					    $db->query("update switch set switch='1' where id=".$i);
					}
				}
			}
		}
		$i++;
	}
	$result->close();
}