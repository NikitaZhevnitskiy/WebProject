<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
	
<?php

	
$cities=array('Tokyo','Mexico City','New York City','Mumbai','Seoul','Shanghai','Lagos','Buenos Aires','Cairo','London');
$strcount=count($cities);
sort($cities);

for($i=0;$i<$strcount;$i++){	
	echo ($i+1)." ";
	echo $cities[$i]."<br/>";
}
sort($cities);
echo "<br/>";
echo "<ul>";
for($i=0; $i<$strcount;$i++){
	echo "<li>" . $cities[$i] . "</li>";
}
echo "</ul>";
?>
	
	
	
	
	
	
</body>
</html>