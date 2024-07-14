<?php
$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
    "Tuan" => "092432434"
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<h1>Hello, world!</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

<h2>This is phone numbers</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone numbers</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($phone_numbers as $name => $number) {
        echo "<tr>";
        echo "<th scope='row'>1</th>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $number . "</td>";
        echo "</tr>";
    }
    ?>
    <tr>
    </tbody>
</table>

