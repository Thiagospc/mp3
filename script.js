function togglePlayPause() {
    var playButton = document.getElementById('playButton');
    var pauseButton = document.getElementById('pauseButton');

    if (playButton.style.display !== 'none') {
        playButton.style.display = 'none';
        pauseButton.style.display = 'inline-block';
    } else {
        playButton.style.display = 'inline-block';
        pauseButton.style.display = 'none';
    }
}

