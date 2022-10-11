<?php
if(isset($_GET['code']) && isset($_GET['author'])) {
if(strlen($_GET['code']) !== 12) {
    $js = array();
    $js['error'] = 0;
    $js['msg'] = 'Voucher kurang dari 12 Digit!';
    exit(json_encode($js));
}
$scandir = scandir('voctanpdatabase');
$id = count($scandir);
foreach($scandir as $voc) {
    if(strpos($voc, $_GET['code'])) {
        $js = array();
        $js['error'] = 1;
        $js['msg'] = 'Voucher sudah ada!';
        exit(json_encode($js));
    }
}
$b = fopen('voctanpdatabase/'.$_GET['code'].'.json', 'w');
$json['id'] = $id+1;
$json['status'] = 1;
$json['isprivate'] = 1;
$json['author'] = $_GET['author'];
if(isset($_GET['buyer']) && $_GET['buyer'] !== '') {
    $json['buyer'] = $_GET['buyer'];
}
$json['start'] = '13/01/2019';
$json['end'] = '13/02/2019';
$json['type'] = $_GET['type'];
fwrite($b, json_encode($json));
fclose($b);
$res['error'] = 0;
$res['msg'] = 'Voucher '.$_GET['code'].' Berhasil dibuat!';
exit(json_encode($res));
}