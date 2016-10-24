<?php
require_once("config.php");
require_once("ajaxHandler.php");
?>
<html>
    <head>
        <title>PLAYER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <script src="assets\ajax.js"></script>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>

        <div class="wrapper container">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">               
                    <ul class="nav nav-pills nav-stacked">

                        <li><h3>CONTROLS</h3></li>
                        <li><a class="btn btn-info" onclick="ajaxRequest('more-volume','')">VOLUME <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
                        <li><a class="btn btn-info" onclick="ajaxRequest('less-volume','')">VOLUME <span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a></li>
                        <li><a class="btn btn-danger" onclick="ajaxRequest('stop-player','')">STOP <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
                    </ul>

                    <h3 onclick="$('#music-list').toggle()">MP3</h3>
                    <ul id="music-list" class="nav nav-pills nav-stacked">                        
                        <?php foreach($musicList as $k=>$music): ?>
                        <li>
                            <a class="btn" onclick="ajaxRequest('set-music','<?php echo $k; ?>')">
                                <span class="glyphicon glyphicon-play" aria-hidden="true"></span> <?php echo $music['filename']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <h3 onclick="$('#radio-list').toggle()">RADIO</h3>
                    <ul id="radio-list" class="nav nav-pills nav-stacked">
                        <?php foreach($radioStations as $k=>$station): ?>
                        <li>
                            <a class="btn" onclick="ajaxRequest('set-station','<?php echo $k; ?>')">
                                <span class="glyphicon glyphicon-play" aria-hidden="true"></span> <?php echo $k; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>

        <script src="assets\jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
        <script src="assets\bootstrap\js\bootstrap.min.js"></script>
    </body>
</html>