<?php
require_once('config.php');
require_once("Player.php");
$player = new Player();

if(isset($_POST['action']) && isset($_POST['value'])){
    $action = $_POST['action'];
    $value = $_POST['value'];

    switch ($action) {
        case 'set-station':               
            $player->launch($radioStations[$value]);
            break;
        case 'set-music':
			$song = MUSICPATH .escapeshellarg($musicList[$value]['filename']);
            $player->launch($song);
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
