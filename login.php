<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')

    // Check what was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    // If somthing was posted
    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        // read from data file
        $users = file_get_contents('administrators.json');
        // decode to an array of users
        $users = json_decode($users);

            // check user password
            if($users['password'] = $password){
                // Create user session
                $_SESSION['user_id'] = $users['user_id'];
                // Redirect
                header("Location: index.php");
                die;
            }
        echo " Invalid username or password! ";
    }
    else{
        echo " Invalid username or password! ";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign In
        </title>
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST">
                <div>
                    <br>
                    <input type="text" id="username" name="username">
                    <input type="password" name="password" id="password">
                    <br>
                    <input type="submit" value="Login" name="" id="button">
                </div>
            </form>
        </div>
    </body>
</html>