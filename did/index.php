<?php

error_reporting(0);
require 'db/connect.php';

if ($result = $db->query('SELECT * FROM people')){

	if ($count = $result->num_rows){

		echo '<p>', $count, '</p>';

		

		//foreach ($rows as $row) {
		//	echo $row['first_name'], ' ' , $row['last_name'] , '<br>';
		//}

		while($row = $result->fetch_object()) 
		{
			echo $row->first_name, ' ' , $row->last_name , '<br>';

		} 

		$result->free();

		//echo "<pre>", print_r($rows), "</pre>";
	}
}
//else
//	{	
//		die(db->error);
//	}
	

//limit 1 , 1

//print_r($result);

?>