<?php
echo "Hello world";
echo "<br/>";
$number = 10;
echo "This is a number " . $number;

echo "<br/>";
$capital = 67;
print("Variable capital is $capital<br>");
print("Variable CaPiTaL is $capital<br>");

echo "<p/>";
$first_name = "John";
$last_name = "Doe";
$name = $first_name . " " . $last_name;
echo $name;

$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);
echo "The extension of the file is $extension";

echo "<p/> Joining and splitting <br/>";
$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";

echo "<p/>";
$fruit_list = ["apple","banana","orange"];
$fruits = implode(",", $fruit_list);
echo "The fruits are $fruits";

?>

<h1>This is Home page</h1>
