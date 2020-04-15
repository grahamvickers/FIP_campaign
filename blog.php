<?php
require_once 'load.php';

$blog_table = 'tbl_blog';
$getBlog = getBlog($blog_table);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>HIV/AIDS CAMPAIGN</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
</head>

<body>
    <?php include 'templates/header.php'?>
    
    <main >
        <h2>Time to Talk Blog</h2>
        <div id="blogPosts">
            <!-- this is to display all products -->
            <?php while($row = $getBlog->fetch(PDO::FETCH_ASSOC)):?>
            <div class="post">
                <h3><?php echo $row['post_title'];?></h3>
                <p><?php echo $row['post_body'];?></p>
            </div>
            <?php endwhile;?>
        </div>

    </main>


        <!-- loading in the php footer template -->
        <?php include 'templates/footer.php'?>
        
    <script type="module" src="public/js/main.js"></script>
</body>
</html>