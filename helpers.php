<?php
    function getAlbums(){
        $albums = glob('albums/*');

        return $albums;
    }

    function getMusics($albums){
        $musics = glob("albums/{$albums}/music/*.mp3");

        return $musics;
    }
?>