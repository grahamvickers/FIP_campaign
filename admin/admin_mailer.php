<?php
    require_once '../load.php';
    confirm_logged_in();

if(isset($_POST['submit'])){
    $subject = trim($_POST['subject']);
    $body = trim($_POST['body']);

    if(empty($subject) || empty($body)){
        $message = 'Please fill out the required fields';
    }else{
        $message = sendMail($subject, $body);
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
        <h2>Send an Email</h2>
        <h4>Email will be sent to all the mailing list subscribers</h4>

        <?php echo!empty($message)? $message: '';?>
        <div id="adminForm">
            <form action="admin_mailer.php" method="post">
                <input type="text" name="subject" value="" placeholder="Subject"><br><br>
                
                <input type="file" name="cover" value="" placeholder="Landing Image"><br><br>  

                <textarea name="body" placeholder="Body Text"></textarea><br><br>

                <button name="submit">SEND</button>
            </form>
        </div>
    </main> 
    <?php include '../templates/footerAdmin.php'?>
</body>
</html>