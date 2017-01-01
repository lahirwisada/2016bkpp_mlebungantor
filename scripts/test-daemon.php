<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * test-daemon.php
 * Nov 16, 2016 
 */

$seconds = 2;
$micro = $seconds * 1000000;
while(true){
 $myFile = "../data/daemontest.txt";
 $fh = fopen($myFile, 'a') or die("Can't open file");
 $stringData = "File updated at: " . time(). "\n";
 fwrite($fh, $stringData);
 fclose($fh);
 usleep($micro);
}