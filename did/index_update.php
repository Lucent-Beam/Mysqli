<?php

require 'db/connect.php';





if($update = $db->query("UPDATE people SET bio='The biggest player that the world have seen' WHERE id=1"))

{
	echo $db->affected_rows;

}


?>

