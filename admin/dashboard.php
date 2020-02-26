<!-- this is the admin dashboard -->
<?php
    require_once '../load.php';
    confirm_logged_in();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST LANDING PAGE</title>
</head>
<body>
    <h2>Welcome back <?php echo $_SESSION['user_name'];?> how are you?</h2>

    <a href="admin_createuser.php">Create User Now</a>
    <a href="admin_login.php">SIGN OUT</a>
</body>
</html>
