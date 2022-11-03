<?php
$file = fopen("accesslog.txt","w");
if (!$file) {
    die('Öffnen fehlgeschlagen');
}
print_r(gettimeofday());
