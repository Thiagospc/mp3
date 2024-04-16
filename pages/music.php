<h1>Músicas do Álbum <?=$_GET['album']?></h1>
<p><a href="?page=albums">Voltar para os Álbums</a></p>

<p><a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Adicionar novas músicas</a></p>

<?php
    $album = $_GET['album'];
    $music = getMusics($album);

    foreach ($music as $mp3){
?>
<form action="#" method="post">
    <div class="col-12">
        <input type="checkbox" name="delete_music[]" value="<?=$mp3?>">
        <audio src="<?=$mp3?>" controls></audio>
    </div>

<?php } ?>

    <br />
    <button type="submit" class="btn btn-danger">Excluir selecionadas</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $delete_music = $_POST['delete_music'];
        foreach ($delete_music as $mp3){
            unlink($mp3);
        }
        header("Refresh: 0");
    }    
?>