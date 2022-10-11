<?php require('antiddos.php'); ?>


<html><head>
					<meta name="viewport" content="width=device-width">
					<title>PT.DMC</title>
					<link href="css/bootstrap.min.css" rel="stylesheet">

					<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
					<link rel="stylesheet" type="text/css" href="css/gift.css">
					<link rel="stylesheet" type="text/css" href="css/fonts.css">
					<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

					<link rel="icon" href="https://i.ibb.co/Lt0YMhn/NHEdsca7-QWa-Kct-NKZWm-CA.png">
					<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
					<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1545073489967/recaptcha__id.js"></script>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
          

			    </head>
				<body style="font-family: 'NotoSans-Regular', sans-serif !important;">
					<div>

				<div class="mHeader" style="background-color: #002060;">
					<h1>E-VOUCHER</h1>
				</div>
				<div class="container" style="margin-top: 50px;">
					<div class="row">
						<div class="col-2">
						</div>
						<div class="col-8">
							<h2 class="p-3" style="font-weight: 600;">VOUCHER</h2>
						</div>
						<div class="col-2">
						</div>
					</div>
					<div class="row">
						<div class="col-1">
						</div>
						<div class="col-10 cl-recap justify-content-center">
							<form name="frm" action="redeem.php" method="GET">
								<input type="hidden" name="code" value="<?php echo $_GET['code']; ?>">
                                <span class="pull-left"><img src="https://image.prntscr.com/image/uk8wmsLOTMSxs-OAplYu_Q.png"></span>
                              <br><br><br><br><br><br><br>
								<input type="submit" class="btn btn-primary btn-block" value="Submit">
							</form>
						</div>
						<div class="col-1">
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-1">
						</div>
					<div class="col-10">
			<p class="p-3 text-left" style="font-weight: 300; border: 1px solid #ccc; border-radius: 4px; font-size: 0.9rem;">
				<i class="fa fa-caret-right" aria-hidden="true"></i>
				E-voucher yang dibeli BUKAN lewat Gift-N dan E-Commerce resmi, tidak bisa digunakan di outlet manapun. Gift-N tidak bertanggung jawab jika terjadi masalah. 
				<br><br>
				<i class="fa fa-caret-right" aria-hidden="true"></i>
				Gift-N TIDAK MEMILIKI official reseller di facebook atau instagram. Akun pribadi yang menjual e-voucher Gift-N harus diwaspadai
				<br><br>
				<i class="fa fa-caret-right" aria-hidden="true"></i>
				Silahkan verifikasi terlebih dahulu, jika ingin melakukan penukaran voucher (Mohon untuk menunjukkan redeem page pada kasir)
				<br><br>
				<i class="fa fa-caret-right" aria-hidden="true"></i>
				Jika sudah melakukan verifikasi, klik tombol Submit berwarna biru untuk melanjutkan
			</p>
		</div>
						<div class="col-1">
						</div>
					</div>
				</div>

					</div>

					<script src="http://egift.id/Scripts/umd/popper.min.js"></script>
					<script src="http://egift.id/Scripts/bootstrap.min.js"></script>


					<script type="text/javascript">

						function recaptchaCallback()
						{
							$('#btn_submit').removeAttr('disabled');
						};

					</script>
<!-- </body> --!></body></html>
