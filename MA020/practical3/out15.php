<?php    
		$marks = array(    
						"Saurav" => array( "physics" => 35,"maths" => 30,"chemistry" => 39), 
  						"Rahul" => array("physics" => 30,"maths" => 32,"chemistry" => 29),
  						"Veer" => array("physics" => 31,"maths" => 22,"chemistry" => 39));    
  		echo "Marks for Saurav in physics : " ;
  		echo $marks['Saurav']['physics'] . "<br />";     
  		echo "Marks for Rahul in maths : ";    
  		echo $marks['Rahul']['maths'] . "<br />";     
  		echo "Marks for Veer in chemistry : " ;    
  		echo $marks['Veer']['chemistry'] . "<br />";  
 ?>