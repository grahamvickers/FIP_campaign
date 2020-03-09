<?php
    require_once '../load.php';
    confirm_logged_in();
    user_verification();

    if(isset($_POST['submit'])){
        $fname = trim($_POST['fname']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if(empty($email) || empty($password) || empty($username) || empty($fname)){
            $message = 'Please fill out the required fields';
        }else{
            $message = createUser($fname, $username, $password, $email);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Poppins&display=swap" rel="stylesheet">
    <title>Create User</title>
</head>
<body>
    <?php include '../templates/headerAdmin.php'?>
    <main id="adminPage">

        <h2>Create a new user</h2>

        <?php echo!empty($message)? $message: '';?>
        <div>
            <div>
                <form action="admin_createuser.php" method="post">

                    <input type="text" name="fname" value="" placeholder="First Name"><br><br>
    
                    <input type="text" name="username" value="" placeholder="Username"><br><br>

                    <input type="text" name="password" value="" placeholder="Password"><br><br>

                    <input type="email" name="email" value="" placeholder="Email"><br><br>
                    <button name="submit">CREATE USER</button>
                </form>
            </div>
        </div>

    </main>
    <?php include '../templates/footerAdmin.php'?>
</body>
</html>