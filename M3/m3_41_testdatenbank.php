<?php
$mysqli = new mysqli("localhost","root","2804","emensawerbeseite",3306);
echo $mysqli->host_info."\n";