<?php
class Player {
    public function lunch($command,$initialVolume = 10) {
        //require_once('config.php');

        echo "|lunch|";
        //Kill all of mplayer processes
        shell_exec("killall mplayer");
        //Create mplayer input file
        shell_exec("mkfifo /tmp/mplayer-fifo");
        
        $cmd = "mplayer -volume ".$initialVolume." -really-quiet -noconsolecontrols -fs -slave -input file=".INPUT_FILE." ".$command." </dev/null >/dev/null 2>&1 &";
        echo "|".$cmd."|";    
        shell_exec($cmd);
    }

    public function control($command) {
        //Pipe mplayer command to mplayer input file
        shell_exec("echo \"".$command."\" > /tmp/mplayer-fifo");
    }

    public function kill() {
        shell_exec("killall mplayer");
    }
}
