 <?php

include('config.php');
	
	$query = "select * from switch";
	if ($result = $db->query($query)) {
		while ($row = $result->fetch_row()) {
			echo $row[1];
		}
				  
	}

?>	