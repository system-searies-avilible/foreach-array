<?php
//index foreach loop
$a=array(10,20,30);
foreach($a as $value){
echo$value."<br>";	
	
}
echo"<br><br>";

//assiciative array foreach loop

$age=array("moheez"=>23,"najeeb"=>20,"Ameen"=>22);

foreach($age as $name => $value){
	echo $name ." => ". $value."<br>";
	
}
?>