
<div class="cabecalhoAlbums">
    <h1>Sua Biblioteca</h1>
    <a href="?page=new_album" class="btn btn-success" id="bnt-add">+</a>
</div>


<hr>

<div class="row">
    <?php
        
        $albums = getAlbums($albums);

        foreach ($albums as $album){

            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.jpeg";

            $nameAlbumShow = str_replace('_', ' ', $nameAlbum);
    ?>
    <div class="col-4">
        <a href="?page=music&album=<?=$nameAlbum?>"><img src="<?php echo $imgAlbum ?>" class="img-album"></a>
        <p class="nomeAlbum"><?php echo $nameAlbumShow ?></p>
    </div>
    <?php
        }
    ?>
</div>