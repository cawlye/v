<?php
if(!isset($_GET['username']) && !isset($_GET['password'])) {
    exit();
} else {
    /*if($_GET['username'] !== 'Wadmingan') {
        exit("Lagi MT");
    }*/
    $user = file_get_contents('semuauserdisini.json');
    $json = json_decode($user, true);
    $user = $json['user']["".$_GET['username'].""];
    if(!isset($user)) {
        exit();
    } 
    $password = $user['password'];
    if($password !== $_GET['password']) {
        exit();
    }
}
?>
<?php
function getvoucher() {
$b = scandir('voctanpdatabase');
static $id = 0;
foreach($b as $vocer) {
    if(strpos($vocer, 'json') !== FALSE) {
        $b = file_get_contents('voctanpdatabase/'.$vocer);
        $b = json_decode($b, true);
        #$b['id'] = $id;
        #file_put_contents('voctanpdatabase/'.$vocer, json_encode($b));
        #$id++;
        if($b['author'] == $_GET['username']) {
            if($b['isprivate'] == 1) {
                $privlic = 'Private';
            } else {
                $privlic = 'Public';
            }
            if(isset($b['buyer'])) { $buyer = " | ".$b['buyer']." | "; } else { $buyer = ''; }
            if(date('d/m/Y') >= $b['end']) {
                $expiredStatus = '<font color=red>Expired</font>';
             #   $livead = '<font color=red>Dead</font>';
            } else {
                $expiredStatus = '<font color=lime>Not expired</font>';
            }
            if($b['status'] == 1) { $livead = '<font color=lime>Live</font>'; } else { $livead = '<font color=red>Dead</font>'; }
            $end = $b['end'];
            $vocer = str_replace('.json', '', $vocer);
            echo "[".$b['id']."] | ".$vocer." | ".$privlic." | ".$expiredStatus." | [Type : ".$b['type']."] | => ".$livead."$buyer".$end."<br>";
        }
        #if($js['isprivate'] == 1 && $js['author'] == )
    }
}
}
?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php echo $_SERVER['REMOTE_ADDR']."<br>".date('d/m/Y'); ?>
        <span id="author" style="display:none;"><?php echo $_GET['username']; ?></span>
        <input type="text" name="voucher" id="voucher" placeholder='Voucher code'/> <br> <br>
        <input type="text" name="buyer" id="buyer" placeholder='Buyer (Optional)'/> <br> <br>
        <select name="type">
            <option selected value="kfc">KFC</option>
            <option value="timezone">Timezone</option>
            <option value="burgerking1">Burgerking type 1</option>
            <option value="esteler">Es teler</option>
        </select>
        <button onclick="generate()" id="generate">Generate</button>
        <br>
        <br>
        <span id="berhasilgak"></span><br><br>
        <button onclick="randNumber()">Generate Random Number</button>
        <br>
        <br>
        <button onclick="showVoucher()" id="showVoucher">Show Your voucher</button>
        <button onclick="hideVoucher()" id="hideVoucher" style="display:none;">Hide Your voucher</button>
        <br>
        <br>
        <span id="voucherMe" style="display:none;">
            <?php getvoucher(); ?>
        </span>
        <script>
            function generate() {
                var code = $("#voucher").val();
                var author = $('#author').text();
                var buyer = $("#buyer").val();
                var type = $('select[name="type"]').val();
                $("#generate").prop('disabled', true);
                $.getJSON('generate.php?code='+code+'&author='+author+'&type='+type+'&buyer='+buyer, function(data) {
                    $("#berhasilgak").text(data.msg);
                    $("#generate").prop('disabled', false);
                })
            }
            function showVoucher() {
                $('#voucherMe').show();
                $("#hideVoucher").show();
                $("#showVoucher").hide();
            }
            function hideVoucher() {
                $('#voucherMe').hide();
                $("#hideVoucher").hide();
                $("#showVoucher").show();
            }
            function randNumber() {
                var rand = Math.random() * (999999999 - 111111111 + 1) << 0;
                $("#voucher").val('811'+rand);
            }
        </script>
    </body>
</html>