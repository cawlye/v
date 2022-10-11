<?php
$blacklist = array('35.229.138.119', '104.199.214.147', '104.199.128.134', '35.229.138.119', '114.5.145.127', '35.229.228.254');
foreach($blacklist as $bl) {
    if(strpos($_SERVER['REMOTE_ADDR'], $bl) !== FALSE) {
        exit("JANGAN DI DDOS BABI MISKIN LO YA GAK BISA BELI MANGKANYA DI DDOS");
    }
}
?>
<?php
$line = date('Y-m-d H:i:s') . " - ".$_SERVER['REMOTE_ADDR']." - ".$_SERVER['REQUEST_URI']."\n<br>";
$b = fopen('visitors.txt', 'a');
fwrite($b, $line);
fclose($b);
?>