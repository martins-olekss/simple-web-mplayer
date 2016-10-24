<?php
require_once('config.php');
require_once("Player.php");
$player = new Player();

if(isset($_POST['action']) && isset($_POST['value'])){
    $action = $_POST['action'];
    $value = $_POST['value'];

    switch ($action) {
        case 'set-station':               
            $player->lunch($radioStations[$value]);
            break;
        case 'set-music':
        $song = MUSICPATH .escapeshellarg($musicList[$value]['filename']);
        echo "<h1>Setting MP3</h1>";
        echo "SONG:".$musicList[$value]['filename']."<br>";
        echo "FULLPATH: ".$song."<br>";
            $player->lunch($song);
            break;
        case 'stop-player':
            $player->kill();
            break;
        case 'more-volume':
            $player->control("volume +1");
            break;
        case 'less-volume':
            $player->control("volume -1");
            break;
    }
}
