<?php


echo "testing php here";

$link = mysql_connect("172.30.153.208", "tgt_admin", "qazwsx$#21");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
    
    
?>
