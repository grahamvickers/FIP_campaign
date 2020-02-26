<?php 
    require_once '../load.php';

    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(!empty($username) && !empty($password)){
            //log user in
            $message = login($username, $password, $ip);
            //var_dump($message);exit;
        }else{
            $message = 'Please fill out the required field';
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
    <title>Login Page</title>
</head>
<body>
    <main>
        <h2>Login Page</h2>
        <?php echo !empty($message)? $message: ''; ?>
        <form class="adminForm" action="admin_login.php" method="post">
            <div>
                <input type="text" name="username" value="" placeholder="Your username.." required>
                <input type="password" name="password" value="" placeholder="And your password.." required>

                <button name="submit">Submit</button>
            </div>
        </form>
    </main>
</body>
</html>