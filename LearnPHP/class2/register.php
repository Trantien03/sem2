<?php
//validate


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $email = $password = '';
    $errors = [];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($name)) {
        $errors['name'] = 'Name is required';
    }

    if(empty($email)) {
        $errors['email'] = 'Email is required';
    }

    if(empty($password)) {
        $errors['password'] = 'Password is required';
    }
}

?>

    <html>

    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>
    <form method="POST" action="register.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <?php if (isset($errors["name"])): ?>
            <span class="error"><?php echo $errors["name"]; ?></span>
        <?php endif; ?>

        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <?php if (isset($errors["email"])): ?>
                <span class="error"><?php echo $errors["email"]; ?></span>
            <?php endif; ?>

        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php if (isset($errors["password"])): ?>
                <span class="error"><?php echo $errors["password"]; ?></span>
            <?php endif; ?>

            <br>
            <button type="submit">Register</button>
    </form>
    </body>
    </html>

<?php

if( empty($error) )
{
    echo "<p>";
    echo "Name " . $name;
    echo "<p>";
    echo "Email " . $email;
    echo "<p>";
    echo "Password " . $password;
}

?>