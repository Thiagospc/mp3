<h1>Álbums</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar novo Álbum</a>

<hr>

<div class="row">
    <?php
        
        $albums = getAlbums($albums);

        foreach ($albums as $album){

            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.jpeg";
    ?>
    <div class="col-3">
        <a href="?page=music&album=<?=$nameAlbum?>">
            <img src="<?php echo $imgAlbum ?>" class="img-album">
            <?php echo $nameAlbum ?>
        </a>
        
    </div>
    <?php
        }
    ?>
</div>