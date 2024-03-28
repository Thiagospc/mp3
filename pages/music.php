<a href="?page=albums">Voltar para os Álbums</a>
<h1>Músicas do Álbum <?=$_GET['album']?></h1>
<hr>

<?php
    $album = $_GET['album'];
    $music = getMusics($album);

    foreach ($music as $mp3){
?>

<div class="col-12">
    <audio src="<?=$mp3?>" controls></audio>
</div>

<?php
    }
?>