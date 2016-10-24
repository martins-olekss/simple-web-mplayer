<?php
define("INPUT_FILE","/tmp/mplayer-fifo");
define('MUSICPATH', 'music/');

/* List of radio stations to display */
$radioStations = array(
    "swh_rock"          => "http://80.232.162.149:8000/rock96mp3",
    "mix_fm"            => "http://91.90.255.111:80/MixFM",
    "skonto"            => "http://skonto.ls.lv:8002/mp3",
    "swh"               => "http://80.232.162.149:8000/swh96mp3",
    "latvijas_radio"    => "http://nabamp0.latvijasradio.lv:8008/",
    "swh_plus"          => "http://80.232.162.149:8000/plus96mp3",
    "radio_2"           => "http://lr2mp1.latvijasradio.lv:8002/",
    "kurzemes"          => "http://80.70.23.50:8000/",
    "topradio"          => "http://195.13.200.164:8000/",
    "mix_fm_dance"      => "http://91.90.255.111:80/995"
);

//Lists all mp3 files from MUSICPATH directory
$musicList = array();
$files = scandir(MUSICPATH, 1);
foreach($files as $f) {
    $ext = pathinfo($f, PATHINFO_EXTENSION);
    if($ext == "mp3") {
        $musicList[] = array(
            "filename"=>$f
        );
    }
}