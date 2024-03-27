<h1>Álbums</h1>

<div class="row">
    <?php
        
        $albums = getAlbums($albums);

        foreach ($albums as $album){

            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.jpeg";
    ?>
    <div class="col-3">
        <a href="">
            <img src="<?php echo $imgAlbum ?>" class="img-album">
            <?php echo $nameAlbum ?>
        </a>
        
    </div>
    <?php
        }
    ?>
</div>