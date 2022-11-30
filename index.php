<?php
    // Read from JSON file
    session_start();
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <div>
            <a href="logout.php"> Sign out </a>
        </div>
        <br>
        Welcome, <?php echo $users['username']; ?>
        <br>
        <hr>

    </body>
</html>