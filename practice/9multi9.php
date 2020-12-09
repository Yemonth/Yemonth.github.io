<html>
<head>
<title>p10-2</title>
<meta charset="utf-8" />
</head>
<body>
<?PHP 
	for($a=1;$a<10;$a++){
		for($b=1;$b<10;$b++){
			echo'<div style="display:inline-block; width:50px;margin-left:10px;">';
			echo $a."x".$b."=".$a*$b;
			echo "</div>";
		}
		echo "\n";
	}
?>
</body>
</html>
