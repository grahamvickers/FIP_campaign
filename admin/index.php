<?php
    require_once '../load.php';
    confirm_logged_in();
    user_verification();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Poppins&display=swap" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body >
    <?php include '../templates/headerAdmin.php'?>

    <main id="admin">
        <h2>
            <script>
                var day = new Date();
                var hr = day.getHours();
                    if (hr < 11) {
                    document.write("Good morning  <?php echo $_SESSION['user_name'];?>, looks like you need a cup of coffee!");
                    }
                    if (hr = 11) {
                    document.write("Good afternoon  <?php echo $_SESSION['user_name'];?>, how was lunch?");
                    }
                    if (hr > 17) {
                    document.write("Good evening  <?php echo $_SESSION['user_name'];?>, don't work too late now!");
                    }
            </script>
        </h2>

        <div class="adminCon">
            <div class="optionCon">
                <img src="../public/images/add.svg" alt="Create User icon">
                <a href="admin_createuser.php">Add User</a>
            </div>

            <div class="optionCon">
                <img src="../public/images/update.svg" alt="Edit User icon">
                <a href="admin_editUser.php">Edit Account</a>
            </div>

            <div class="optionCon">
                <img src="../public/images/remove.svg" alt="Remove Users icon">
                <a href="admin_deleteUsers.php">Remove Users</a>
            </div>

            <!-- <div class="optionCon">
                <img src="../public/images/mail.svg" alt="Mail icon">
                <a href="admin_mailer.php">Send Email</a>
            </div> -->
        </div>

        <div class="adminCon">
            
            <div class="optionCon">
                <img src="../public/images/new.svg" alt="Mail icon">
                <a href="admin_newpost.php">Create Post</a>
            </div>

            <div class="optionCon">
                <img src="../public/images/update2.svg" alt="Mail icon">
                <a href="admin_editpost.php">Update Posts</a>
            </div>

            <div class="optionCon">
                <img src="../public/images/delete.svg" alt="Mail icon">
                <a href="admin_deletepost.php">Remove Posts</a>
            </div>
        </div>
    </main>    

    <?php include '../templates/footerAdmin.php'?>
</body>
</html>