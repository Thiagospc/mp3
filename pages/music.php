<h1>Músicas do Álbum <?=$_GET['album']?></h1>
<p><a href="?page=albums">Voltar para os Álbums</a></p>

<p><a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Adicionar novas músicas</a></p>

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