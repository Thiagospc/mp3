<div class="cabecalhoAlbums">
    <?php
        $nameAlbumShow = str_replace('_', ' ', $_GET['album']);
    ?>
    <h1>Músicas do Álbum <?=$nameAlbumShow?></h1>
    <p><a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success" id="bnt-add">+</a></p>
</div>

<p><a href="?page=albums" class="btn btn-success"><<</a></p>
<form action="#" method="post">
    <div class="music-container" style="height: 300px; overflow-y: scroll;">
        <?php
            $album = $_GET['album'];
            $music = getMusics($album);

            foreach ($music as $mp3){
        ?>
        <div class="col-12">
            <input type="checkbox" name="delete_music[]" value="<?=$mp3?>">
            <audio src="<?=$mp3?>" controls></audio>
        </div>
        <?php } ?>
    </div>

    <button type="submit" class="btn btn-danger">Excluir selecionadas</button>
</form>

<style>
    body{
        background-image: url(<?= "./albums/{$album}/{$album}.jpeg" ?>);
        background-position: center;
    }

</style>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $delete_music = $_POST['delete_music'];
        foreach ($delete_music as $mp3){
            unlink($mp3);
        }
        header("Refresh: 0");
    }    
?>

<div class="player-controls">
    <!-- <div>
        <img src="<?= "./albums/{$album}/{$album}.jpeg" ?>" style="width: 250px; text-align: center;">
    </div> -->
    <div>
        <p>nome da música</p>
    </div>
    <div class="progress-bar">
        <div class="progress"></div>
    </div>
    <div class="time">
        <span id="currentTime">0:00</span>
        <span id="duration">0:00</span>
    </div>
    <button><img src="./layout/prev.svg" alt="Anterior"></button>
    <button id="playButton" onclick="togglePlayPause()">
        <img src="./layout/play.svg" alt="Play">
    </button>
    <button id="pauseButton" onclick="togglePlayPause()" style="display: none;">
        <img src="./layout/pause.svg" alt="Pause">
    </button>
    <button><img src="./layout/next.svg" alt="Próximo"></button>
</div>

<script>
    function playMusic(mp3) {
        var audio = document.createElement('audio');
        audio.src = mp3;
        audio.controls = true;
        var player = document.querySelector('.player-controls');
        player.insertBefore(audio, player.firstChild);
    }
</script>


