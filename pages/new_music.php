<a href="?page=albums"><<</a>
<h1>cadastrar novas músicas para <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="audio" class="form-control">
    </div>
    <br />
    <br />

    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php
ini_set('upload_max_filesize', '1000M');
ini_set('post_max_size', '1000M');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $album = $_GET['album'];

    $path = "albums/{$album}/music";

    if(!is_dir($path)){
        mkdir($path);
    }

    if(move_uploaded_file($_FILES['audio']['tmp_name'], $path . '/' . $_FILES['audio']['name'])){
        header("Location: ?page=music&album={$album}");
    }else{
        echo 'Falha no upload';
    }
}
?>