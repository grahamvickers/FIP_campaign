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
    
    <main id="app">

        <!-- loading in the php header template -->
        <?php include 'templates/header.php'?>

        <!-- router-view loads in the vue modules content that is selected from the nav -->
        <router-view class="mainVue"/>

    </main>


        <!-- loading in the php footer template -->
        <?php include 'templates/footer.php'?>
        
    <script type="module" src="public/js/main.js"></script>
</body>
</html>