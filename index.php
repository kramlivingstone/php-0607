<!DOCTYPE html>
<html>
<head>
	<title>PHP -  2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<?php 

$count = 15;
do
{
	echo "$count times 12 is " . $count * 12 . "<br>";
	$count++;
} while ($count <= 12);

echo $count;

echo "<br><br>";

$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday', 'Sunday');

$input = 0;


do
{
	echo $input + 1 . ") " . $days[$input%7];
	echo "<br>";
	++$input;

}while ($input <= 27);

echo "<br><br>";


$num = 1;
while($num<=12){
	echo "$num squared is " . pow($num,2);
	echo "<br>";
	$num++;
}


echo "<br><br>";

for($num = 1;$num<=12;$num++)
{
	echo "$num squared is " . pow($num,2) . "<br>";
}


echo "<br><br>";

$x = 1;
while($x <= 50){
	if ($x <= 15){
		echo $x . ' * 2 = ' . $x*2;
		echo "<br>";
	}elseif ($x <= 35){	
		echo '(30 - ' . $x . ') / 2 = ' . ((30 - $x) / 2);
		echo "<br>";
	}elseif ($x <= 50){
		echo $x . ' + 6 = ' . ($x + 6);
		echo "<br>";
	}
	$x++;
}

echo "<br><br>";


$numbers = 5;
$factorials = 1;
do {
  $factorials *= $numbers;
  $numbers = $numbers - 1;
} while ($numbers > 0);
echo $factorials;

echo "<br><br>";

$factorial = 1;
$count = 1;
while ($count < 7)
{
	$factorial = $factorial * $count;
	// $factorial *= $count;
	echo "Factorial of $count is $factorial" . "<br>";
	$count++;
}



echo "<br><br>";
$y = 0;
$z = 0;

for($x=0; $x<=50; $x++)
{
	if($x % 2 == 0)
	{
		$y = $y + $x;

	} else {
		$z = $z + $x;
	}
	
}

echo $y . "<br>";
echo $z;


echo "<br><br>";

$string = "the quick brown fox jumps over the lazy dog.";

for($x=0;$x<strlen($string);$x++)
{
	if($x%2==0)
		echo strtolower($string[$x]) . "<br>";
	else
		echo strtoupper($string[$x]) . "<br>";	
}


$vowels = array('a','e','i','o','u');
$total_vowels = 0;
for($x=0;$x<strlen($string);$x++)
{
	for($y=0;$y<count($vowels);$y++)
	{
		if($string[$x]==$vowels[$y])
		$total_vowels++;
	}

}


echo "string: $string";
echo "<br>";
echo "Number of vowels:" . $total_vowels;


echo "<br><br>";


$input = 5;

for($x=1;$x<=$input;$x++) {
	echo '<div class=row>';
	for($y=1;$y<=$input;$y++){
		if(($x+$y) % 2 == 0){
			echo '<div class="col-md-2 text-center" style="background:salmon">' . ($x * $y). '</div>';
		}
		else{
			echo '<div class="col-md-2 text-center" style="background: grey">' . ($x * $y) . '</div>';
		}
	}
	echo '</div>';
}

echo "<br><br>";

$num1 = 1;
$num2 = 1;
$n = 15;

echo 'Fibonacci Sequence:';
echo "<br><br>";
echo "<div class='row'>";
echo "<div class='col-md-12' style='background:red'>";
echo $num1 .' '. $num2 .' ';



for($x=2;$x<$n;$x++) // $n = *1 *2 3 4 5 6 7 8 9 10 11 12 13 14
{
	$num3 = $num1 + $num2;
	echo  $num3 .' '; // 1 1 2 3 5 8 13 21 34 55 89 144 233 377

	$num1 = $num2; // 1 2 3 5 8 13 21 34 55 89 144 233
	$num2 = $num3; // 2 3 5 8 13 21 34 55 89 144 233 377
}
echo "</div></div>";

echo "<br><br>";


$colors = ['red','orange','yellow'];
echo "<ul>";
foreach ($colors as $color) {
	echo "<li>".$color."</li>";
}
echo "</ul>";


$days = array(
		'January' => 31,
		'February' => 28,
		'March' => 31,
		'April' => 30
	);
echo "<ul>";
for($x=0;$x<count($colors);$x++)
{
	echo "<li>".$colors[$x]."</li>";
}
echo "</ul>";


$records = [
		'Billy' => 26,
		'PeeJay' => 23
];

echo $records['Billy']['password'];


foreach ($records as $name => $age) {
	echo "key: " . $name . ", value: " . $age . "<br>";
}


$record = [
		'Billy' => 26,
		'PeeJay' => 23
];


$record = [
	'Billy' => ['username' => 'asdf','password' => 'qwerty'],
	'PeeJay' => ['username' => 'asdf', 'password' => 'qwerty']
];

foreach ($record as $name => $creds) {
	echo $name . ":<br>";
	foreach ($creds as $key => $value) {
		echo $key . ": " . $value . "<br>";
	}
}

?>

</div>

<div class="container">
	<?php 
		if(isset($_POST['username'])){
			echo "hello ". $_POST['username'];
		}
	 ?>
	 <form method="post" action="">
	 	username: <input type="text" name="username"><br>
	 	password: <input type="password" name="password"><br>
	 	<button>Submit</button>
	 </form>
</div>


</body>
</html>