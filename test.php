<?php
//Just for testing if webserver user can lunch mplayer
if (isset($_POST['test-submit'])) {
    echo "Executing test";
    shell_exec("mplayer -really-quiet -noconsolecontrols http://91.90.255.111:80/MixFM </dev/null >/dev/null 2>&1 &");
}
?>
<form action="#" method="post">
<input type="submit" name="test-submit" value="ok">
</form>