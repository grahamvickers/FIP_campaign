<?php
    require_once '../load.php';
    confirm_logged_in();

if(isset($_POST['submit'])){
    $title = trim($_POST['fname']);
    $body = trim($_POST['username']);

    if(empty($title) || empty($body)){
        $message = 'Please fill out the required fields';
    }else{
        $message = createPost($title, $body);
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
    <title>Create Admin User</title>
</head>
<body>
    <?php include '../templates/headerAdmin.php'?>
    
    <main id="admin">

        <h2>Create new blog post</h2>
        <h4>Fill in the fields below and the post will be deployed live</h4>

        <?php echo!empty($message)? $message: '';?>
        <div id="adminForm">
            <form action="admin_newpost.php" method="post">

                <input type="text" name="title" value="" placeholder="Post Title"><br><br>

                <textarea name="body" id="" cols="30" rows="10" placeholder="Body Content"></textarea>
                
                <button name="submit">CREATE POST</button>

            </form>
        </div>
    </main> 
    
    <?php include '../templates/footerAdmin.php'?>
</body>
</html>