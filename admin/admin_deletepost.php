<?php 
    require_once '../load.php';
    confirm_logged_in();

    $posts = getAllPosts();
    if(!$posts){
        $message = 'Failed to get blog list';
    }

    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        $delete_result = deletePost($post_id);

        if(!$delete_result){
            $message = 'Failed to delete user';
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
    <title>Delete Users</title>
</head>
<body>
    <?php include '../templates/headerAdmin.php'?>

    <main id="admin">
        <h2>Delete an unwanted users</h2>
        <h4>Remove users and their admin portal access by clicking REMOVE</h4>

        <?php echo !empty($message)? $message : '';?>
        <table>
            <thead>
                <tr>
                    <th>POST ID</th>
                    <th>POST NAME</th>
                    <th>REMOVE POST</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($post = $posts->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <td><?php echo $post['post_id'];?></td>
                    <td><?php echo $post['post_title'];?></td>
                    <td><a id="delete" href="admin_deletepost.php?id=<?php echo $post['post_id'];?>">REMOVE</a></td>
                </tr>
            <?php endwhile;?>
            </tbody>
        </table>
    </main> 

    <?php include '../templates/footerAdmin.php'?>
</body>
</html>