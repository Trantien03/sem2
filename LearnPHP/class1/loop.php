<?php

echo "For <br/>";
$array = [1, 2, 3, 4, 5, 7];
for($i = 0; $i < count($array); $i = $i + 1) {
    echo "Number " . $array[$i] . "<br/>";
}

foreach ($array as $item) {
    echo "Number " . $item . "<br/>";
}

echo "<p> for with keys <br/>";
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
    "Tuan" => "092432434"
];

foreach ($phone_numbers as $name => $number) {
    echo "$name's number is $number.<br/>";
}

?>
