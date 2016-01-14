<?php

error_reporting(0);
require 'db/connect.php';


if(isset($_GET['first_name']))
	{

		echo $first_name =  $db->real_escape_string(trim($_GET['first_name']));
	
		if ($insert = $db->query("INSERT INTO people (first_name, last_name, bio, created) 
			VALUES ('{$first_name}', 'Kethleens', 'I dont find my keys', NOW())"))

			{
				echo $db->affected_rows;

			}
}



?>
