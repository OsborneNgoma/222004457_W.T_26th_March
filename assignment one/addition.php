<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
</head>
<body>
<head>The sum of two numbers</head>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$sum = $Fname " " $Lname ;
echo "<p> the sum of $num1 and $num2 is: $sum<p>";
}
?>

</body>
</html>