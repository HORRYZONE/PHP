<!-- ASSIGNMENT 2
project : farenheit to celcius conversion
matric number : 2112125
name : NOR DANISH FITRI BIN NOR SYAMAIZA -->

<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
</head>
<body>
<?php
 if(isset($_POST['convert'])){

// Convert Fahrenheit to Celsius
$celsius = ($fahrenheit - 32) * 5/9;
$celsius_rounded = round($celsius, 2);

// Display the result
echo "<p>A country of $country is currently $celsius_rounded degree Celsius.</p>";

}

if(isset($_POST['clear'])){
$fahrenheit = "";
$celsius = "";
$celsius_rounded = "";
} ?>
</body>
</html>