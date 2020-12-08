<html>
<head>
<title>p10-2</title>
<meta charset="utf-8" />
<style>
.result{
	margin:auto;
	font-size:3px;
}
</style>
</head>
<body>
<form method="post" action="AmultiB.php">
<font></font>
<input type="text" name="multiplicand"><br>
<font></font>
<input type="text" name="multiplier"><br>
<input type="submit" value="提交">
</form>
<div class="result">
<?PHP
	$mulcand=$_POST['multiplicand'];
	$muler=$_POST['multiplier'];
	for($a=1 ;$a<$multiplier ;$a++){
		for($b=1 ;$b<$muler ;$b++){
			echo $a + "x" + $b + " = "$a*$b;
			echo "; ";
		}
		echo "<br>\n";
	}
?>
</div>
</body>
</html>