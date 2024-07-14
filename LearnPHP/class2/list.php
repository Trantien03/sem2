
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1>List of Employees</h1>

<?php

$employees = array(
    array('name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'),
    array('name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'),
    array('name' => 'Mark Otto', 'email' => 'Otto@example.com', 'phone' => '987-654-3210'),
    // Add more employees here as needed
);

?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($employees as $emp)
    {
        echo '<tr>';
        echo '<th scope="row"></th>';
        echo '<td>' . $emp['name'] .'</td>';
        echo '<td>' . $emp['email'] .'</td>';
        echo '<td>' . $emp['phone'] .'</td>';
        echo '</tr>';
    }
    ?>

    <?php
    foreach ($employees as $emp) { ?>
        <tr>
            <th></th>
            <td><?php echo $emp['name']; ?></td>
            <td><?php echo $emp['email']; ?></td>
            <td><?php echo $emp['phone']; ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

</body>
</html>



