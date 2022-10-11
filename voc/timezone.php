<?php
$s = scandir('voctanpdatabase');
foreach($s as $b) {
    $f = file_get_contents('voctanpdatabase/'.$b);
    echo "$f<br>\n";
    #$j = json_decode($f, true);
    #$j['type'] = 'kfc';
   // echo json_encode($j);
    #file_put_contents('voctanpdatabase/'.$b, json_encode($j));
}