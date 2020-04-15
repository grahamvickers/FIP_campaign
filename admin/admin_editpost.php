<?php 
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $message = $post;
    }

    if(isset($_POST['submit'])){
        $title = trim($_POST['title']);
        $body = trim($_POST['body']);

        $message = editUser($id, $title, $body);
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
    <title>Edit User</title>
</head>
<body>
    <?php include '../templates/headerAdmin.php'?>

    <main id="admin">
        <h2>Edit Blog Posts</h2>
        <?php echo !empty($message)? $message : '';?>
        <div id="adminForm">
            <form action="admin_editpost.php" method="post">

                <?php while($info=$post->fetch(PDO::FETCH_ASSOC)):?>

                <input type="text" name="title" value="<?php echo $info['post_title'];?>" placeholder="Post Title">
                
                <?php endwhile?>
                <button type="submit" name="submit">SAVE CHANGES</button>

            </form>
        </div>
    </main> 

    <?php include '../templates/footerAdmin.php'; ?>
</body>
</html>