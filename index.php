<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mp3 em PHP</title>

    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <?php
            include_once 'helpers.php';

            if (isset($_GET["page"])) {
                if (file_exists("pages/{$_GET["page"]}.php")) {
                    include_once "pages/{$_GET["page"]}.php";
                }else{
                    include_once 'pages/error404.php';
                }
                
            } else {
                include_once 'pages/albums.php';  
            }
        ?>

        <div class="player-controls">
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <div class="time">
                <span id="currentTime">0:00</span>
                <span id="duration">0:00</span>
            </div>
            <img src="./layout/prev.svg" alt="Anterior">
            <img src="./layout/play.svg" alt="Play">
            <img src="./layout/pause.svg" alt="Pause">
            <img src="./layout/next.svg" alt="Próximo">
        </div>

    </div>
    

    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>