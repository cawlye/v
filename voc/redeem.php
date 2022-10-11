<?php require('antiddos.php'); ?>
<?php 
$fopen = file_get_contents('voctanpdatabase/'.$_GET['code'].'.json');
if(!$fopen) {
    $ren = 1;
    $status = 'Voucher tidak valid!';
    $image = 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/mlogo/GIN-47109.jpg';
} else {
    $json = json_decode($fopen, true);
    if($json['type'] == 'kfc') {
        $val = 'KFC Value Voucher 100.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000007051.jpg';
    } else if($json['type'] == 'domino1') {
        $val = 'Dominos Pizza Value Voucher 100.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008114.jpg';
    } else if($json['type'] == 'domino2') {
        $val = 'Dominos Pizza Value Voucher 200.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008115.jpg';
    } else if($json['type'] == 'raacha1') {
        $val = 'Raa Cha Suki & BBQ Value Voucher 100.000';
        $image = 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAAoQAAABMADp8gVwAPqRY.jpg';
    } else if($json['type'] == 'noya1') {
        $val = 'Yoshinoya Value Voucher 100.000';
        $image = 'https://ecs7.tokopedia.net/img/banner/2018/12/6/2892668/2892668_965f3745-1136-487b-81a5-d703261c7f61.jpg';
    } else if($json['type'] == 'boga1') {
        $val = 'BOGA GROUP Value Voucher 200.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008154.jpg';
    } else if($json['type'] == 'boga2') {
        $val = 'BOGA GROUP Value Voucher 100.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008154.jpg';
    } else if($json['type'] == 'esteler') {
        $val = '100K Value Voucher Es Teler 77';
        $image = 'http://gd.image-gmkt.com/li/045/113/857113045.g_0-w_g.jpg';
    } else if($json['type'] == 'hophop1') {
        $val = 'Voucher Hop Hop Value 28.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008005.jpg';
    } else if($json['type'] == 'upnormal') {
        $val = 'CRP GROUP VOUCHER 100.000';
        $image = 'https://image.giftn.co.id/mall/goods_m/0000007981.jpg';
    } else if($json['type'] == 'steak21') {
        $val = 'Steak 21 Value Voucher 100.000';
        $image = 'https://image.giftn.co.id/mall/goods_m/0000007771.jpg';
    } else if($json['type'] == 'lotteria1') {
        $val = 'Voucher Lotteria Rp 50.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008015.jpg';
    } else if($json['type'] == 'mcd') {
        $val = 'McDonald’s Value Voucher 100.000';
        $image = 'https://img20.jd.id/Indonesia/s800x800_/nHBfsgAAKwAAABQAFEPWYQADsXI.jpg';
    } else if($json['type'] == 'excelso1') {
        $val = 'Excelso Value Voucher 100.000';
        $image = 'https://s3.bukalapak.com/img/3664837394/large/Voucher_100000_Excelso.jpg';
    } else if($json['type'] == 'burgerking3') {
        $val = 'Quattro Cheese Whopper + Chicken + Fries (R)';
        $image = 'https://image.giftn.co.id/mall/goods_m/0000007993.jpg';
    } else if($json['type'] == 'timezone1') {
        $val = 'Timezone Value Voucher 500.000 (Saldo 300.000 Free Games 200.000)';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008111.jpg';
    } else if($json['type'] == 'timezone2') {
        $val = 'Timezone Value Voucher 200.000 (Saldo 150.000 Free Games 50.000)';
        $image = 'http://gd.image-gmkt.com/li/676/636/1212636676.g_400-w_g.jpg';
    } else if($json['type'] == 'pizza1') {
        $val = 'PHD Big Box topping Original Signature pizza + Pepperoni Cheese Fusilli + Beef Lasagna Voucher';
        $image = 'https://3.bp.blogspot.com/--LIGS4PqINw/XEx8l182jqI/AAAAAAAAAZE/DzKht7rX9PQrpA0sgnZpXV9iGbifLqVgQCLcBGAs/s1600/done.png';
    } else if($json['type'] == 'burgerking2') {
        $val = 'King Chicken Fillet + Fries (R) + Chicken + Jasmine Tea (R)';
        $image = 'https://image.giftn.co.id/mall/goods_m/0000007991.jpg';
    } else if($json['type'] == 'dcrep1') {
        $val = 'DCrepes Value Voucher 20.000';
        $image = 'http://image.giftn.co.id/mall/goods_m/0000008030.jpg';
    } else if($json['type'] == 'burgerking1') {
        $val = 'Chicken Tendercrisp + King Chicken Fillet + Mozarella King Chicken Fillet';
        $image = 'https://image.giftn.co.id/mall/goods_m/0000007990.jpg';
		
    }
    $start = $json['start'];
    $end = $json['end'];
    $date = str_replace('/', '-', $end);
    if(strtotime(date('d-m-Y')) >= strtotime($date)) {
        $ren = 1;
        $status = '(Voucher ini Sudah kadaluarsa, Tidak bisa dipakai lagi)';
    } else {
        if($json['status'] == 0) {
            $ren = 1;
            $status = 'Voucher sudah pernah dipakai dan tidak dapat digunakan lagi!';
        } else {
            $ren = 0;
            $status = '';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<title>https://egift.id/GC2aPx6v</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/gift.css">
	<link rel="stylesheet" type="text/css" href="/css/fonts.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="/js/jquery-barcode.min.js"></script>
	<script src="/js/jquery.qrcode.min.js"></script>
	<script src="/js/jquery.number.min.js"></script>
	<script src="/js/jquery.alphanum.js"></script>
</head>
<head>
<script type="text/javascript">
 window.onload = function() { jam(); }

 function jam() {
  var e = document.getElementById('jam'),
  d = new Date(), h, m, s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h +':'+ m +':'+ s;

  setTimeout('jam()', 1000);
 }

 function set(e) {
  e = e < 10 ? '0'+ e : e;
  return e;
 }
</script>
</head>
<body style="font-family: 'NotoSans-Regular', sans-serif !important;">
	<div>
		
<div id="divWrap">
	<div id="divMain">
				<div class="mHeader" style="background-color: #42B549;">
					<h1 style="top: 0;"><img src="https://image.giftn.co.id/shop/tokopedia_logo.png" /></h1>
					<a href="#close" class="headerClose">close</a>
				</div>
		<div class="subWrap">
			<div class="subIn">
				<div class="clear" style="height: 2px;"></div>
				<div class="container" style="width: 100%;">
					<div class="row" style="width: 100%;">
						<div class="col-6" style="float: left; color: #0094ff; font-size: 1.2rem;">KEY:234585</div>
						<div class="col-6" style="float: right; color: #ff006e; font-size: 1.2rem;" id="jam"></h1>
</div>
					</div>
				</div>
				<div class="clear" style="height: 10px;"></div>
				<div style="text-align: center; margin-bottom: 10px;">
					<div style="font-size: 1.6em;"><span id="p_item_name"><?php echo $val; ?></span></div>
				</div>
				<div style="text-align: center;">
					<img class="<?php if($ren == 1) { echo "grayscaleOn"; } else { echo ""; } ?>" id="prodInfo_img" src="<?php echo $image; ?>" style="width: 230px;">
				</div>
				<div style="text-align: center; margin-bottom: 10px; font-size: 1.6em;">
				    	
					<span id="pp_expire_date" style="visibility: visible;"><span id="p_expire_date"><?php echo $start; ?> - <?php echo $end; ?></span></span>
				</div>
				<div style="text-align: center; margin-bottom: 10px; font-size: 1.6em;">
					<span id="pp_exchange_date" style="visibility: hidden;"><span id="p_exchange_date">201812010427</span></span>
				</div>

							<div class="click" style="margin-top: 4px; <?php if($ren == 1) { echo 'visibility: hidden;'; } else { echo ""; } ?>">
								<a href="confirm/?code=<?php echo $_GET['code']; ?>">
									<font style="color: #fff; font-weight:600;">REDEEM</font><br>
									<font style="color: #fff; font-size:10px;">Dilarang mengklik tombol ini selain Petugas</font>
								</a>
							</div>
							
							<div style="text-align: center; margin-bottom: 10px; font-size: 1.6em;">
							<p style="font-weight: 600; font-size: 1.8em; letter-spacing: 3px; margin: 0;">
							<?php
					for($i=0;$i<12;$i++) {
					    if($i % "4" == 0 && $i > 0) {
					        echo "-";
					    }
					echo "".$_GET['code'][$i].""; 
					
					}
					?> 
					</p>
					</div>
					
				<div class="barcode-on" style="text-align: center; margin-top: 4px; display: ;">
				
				</div>
				<div style="text-align: center; margin-top: 4px; display: ;">
					<img style="text-align: center; margin-top: 4px; display: ;" src="barcode.php?size=50&text=<?php echo $_GET['code']; ?>"" />
				</div>
				<div class="barcode-off" style="text-align: center; margin: 4px 0; display: ;">
					<p>
						<?php echo $status;  ?>
					</p>
				</div>
				<div class="container cl-alert" style="display: block; background-color: #eee; border-radius: 10px; padding: 0 10px;">
					<p style="font-weight: 600; font-size: 1.2em; padding: 10px;">
						* Jika terjadi kesalahan saat menggunakan voucher, silahkan menghubungi CS Gift-N 0878-3835-0214 (WhatsApp Only) <br> <br>
						* E-voucher yang dibeli BUKAN lewat Gift-N dan E-Commerce resmi, tidak bisa digunakan di outlet manapun. Gift-N tidak bertanggung jawab jika terjadi masalah. <br> <br>
						* Gift-N TIDAK MEMILIKI official reseller di facebook atau instagram. Akun pribadi yang menjual e-voucher Gift-N harus diwaspadai
					</p>
				</div>
				<div class="prodInfo" id="prodInfo_ads" style="visibility: hidden;">
					<img src="https://image.giftn.co.id/mall/cop_redeem/GFN0305.jpg" style="width: 100%; height: 100%; border: none;" />
				</div>
				<div class="clear" style="height: 10px;"></div>
				<div class="prodInfo">
					<div id="prodInfo_text" style="font-size: 1.2em; margin: 0 auto; padding: 10px; border: 1px solid #ccc; white-space: pre-wrap; line-height: 180%;"></div>
				</div>
				<ul style="visibility: hidden;">
					<li></li>
					<li style="visibility: hidden;">Harga: <span id="p_item_price">85000</span></li>
				</ul>
				<span id="p_pin_no" style="visibility: hidden;">811732198927</span>
				<div class="click-disable" style="visibility: visible; text-align: center;">
					<font style="font-size:10px;"><?php if($ren == 1) { echo 'Sudah pakai Voucher ini. Tidak bisa digunakan lagi.'; } else { echo "Voucher valid."; } ?></font>
				</div>
			</div>
		</div>
	</div><!-- End divMain -->
</div><!-- End divWrap -->
<script type="text/javascript">

	$(function()
	{

	});
</script>
	</div>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83926611-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-83926611-3');
	</script>

<!-- </body> --!></body>
</html>