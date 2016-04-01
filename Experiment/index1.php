<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	
<?php
	
	"<br/>";
	$text = "My\rmother\tis\nbeautiful";
	echo $text . "<br/>";

$number=67890;
echo substr($number, 3, 2)."<br/>";

echo <<<_END
Бла бла бла 
_END;

echo "Это строка " . __LINE__ . " в файле " . __FILE__;


echo date('Y-m-d H:i:s (T)', 1) ."<br/>";

function test(){
	static $a=0;
	$a++;
	echo $a. "<br/>";	
}
test();
test();
test();





?>	

</body>
</html>