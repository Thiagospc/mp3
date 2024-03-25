<h1>Álbums</h1>

<div class="row">
    <?php
        for ($i = 1; $i <= 16; $i++) {
    ?>
    <div class="col-3">
        <a href="">
            <img src="../imagens/meteora.jpeg" class="img-album">
        </a>
        Álbum <?php echo $i ?>
    </div>
    <?php
        }
    ?>
</div>