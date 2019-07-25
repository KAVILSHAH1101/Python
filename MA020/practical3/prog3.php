<?php
	$student1=array("id"=>101,"name"=>"Digvijay");
	$student2=array("id"=>101,"marks"=>35);
	$student=array_merge($student1,$student2);
	var_dump($student);
	echo "<br>0=".$student['id'];
	echo "<br>1=".next($student);
	echo "<br>2=".next($student);
	extract($student,EXTR_PREFIX_ALL,"my");
	echo"<br>Rollno : ".$my_id;
	echo"<br>Name : ".$my_name;
	echo"<br>Marks : ".$my_marks;
?>