<!-- //while loop -->

<?php
$x = 1;
echo "while loop <br>";
while($x <= 5) {
echo "The number is: $x <br>";
$x++;
}
?>

<!-- do while loops -->

<?php
$x = 1;

echo "<br>do while loop <br>";
do {
echo "The number is: $x <br>";
$x++;
} while ($x <= 5);
?>

<!-- for loop -->

<?php
echo "<br>for loop <br>";
for ($x = 0; $x <= 10; $x++) {
echo "The number is: $x <br>";
}
?>

<!-- break loop -->
<?php
echo "<br>break loop <br>";
for ($x = 0; $x < 10; $x++) {
if ($x == 4) {
break;
}
echo "The number is: $x <br>";
}
?>