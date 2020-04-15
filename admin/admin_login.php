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
    <title>Admin Login</title>
</head>
<body>
<?php include '../templates/headerLogin.php'?>
    <main id="admin">
        <h2>Login Page</h2>
        <?php echo !empty($message)? $message: ''; ?>
        <div id="adminForm">
            <form action="admin_login.php" method="post">
                <label for="">Username:</label>
                <input type="text" name="username" id="username" value="" placeholder="Knock knock, whos there?">

                <label for="">Password:</label>
                <input type="password" name="password" id="password" value="" placeholder="Your secret is safe with me;)">

                <button name="submit">Submit</button>
            </form>
        </div>
    </main>
    <?php include '../templates/footerAdmin.php'?>
</body>
</html>