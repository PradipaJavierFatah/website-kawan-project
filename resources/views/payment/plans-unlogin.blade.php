<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1, width=device-width" />
		<link rel="stylesheet" href= "{{asset('/css/payment/global.css')}}"/>

		<link rel="stylesheet" href= "{{asset('/css/payment/plans-login.css')}}"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Days One:wght@400&display=swap" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" />
		<link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
	</head>
	<body>
		<div class="plans-login">
			<div class="best-plans-for-consulting-container">
				<h1 class="best-plans-for-container1"><span>Rencana </span> <span class="plans1">Terbaik</span> <span> untuk Konsultasi</span></h1>
			</div>
			<form class="frame-parent17">
				<div class="frame-parent18">
					<div class="frame-parent19">
						<div class="starter-plan-parent2">
							<h1 class="starter-plan4">Paket Dasar</h1>
							<div class="frame-wrapper12">
								<div class="parent2">
									<b class="b4">Rp50K</b> 
									<div class="month-wrapper2"> <b class="month4">/bulan</b> </div>
								</div>
							</div>
						</div>
						<div class="line-wrapper3">
							<div class="frame-child7"></div>
						</div>
					</div>
					<div class="frame-wrapper13">
						<button class="order-now-wrapper" onclick="redirect1(event)"> <b class="order-now">Daftar Sekarang</b> </button>
					</div>
					<div class="frame-parent20">
						<div class="frame-wrapper14">
							<div class="frame-parent21">
								<div class="package-wrapper2"> <b class="package4">Paket</b> </div>
								<div class="frame-child8"></div>
							</div>
						</div>
						<ul class="package-list">
							<li>1 sesi per bulan</li>
							<li>Akses ke sumber daya</li>
							<li>Dukungan melalui email</li>
						</ul>
					</div>
				</div>
				<div class="frame-parent22">
					<div class="frame-parent23">
						<div class="starter-plan-parent3">
							<h1 class="starter-plan5">Paket Standar</h1>
							<div class="frame-wrapper15">
								<div class="parent3">
									<b class="b5">Rp150K</b> 
									<div class="month-wrapper3"> <b class="month5">/bulan</b> </div>
								</div>
							</div>
						</div>
						<div class="line-wrapper4">
							<div class="frame-child9"></div>
						</div>
					</div>
					<div class="frame-wrapper16">
						<button class="order-now-container" onclick="redirect2(event)"> <b class="order-now1">Daftar Sekarang</b> </button>
					</div>
					<div class="frame-parent24">
						<div class="frame-wrapper17">
							<div class="frame-parent25">
								<div class="package-wrapper3"> <b class="package5">Paket</b> </div>
								<div class="frame-child10"></div>
							</div>
						</div>
						<ul class="package-list">
							<li>2 sesi per bulan</li>
							<li>Dukungan email prioritas</li>
							<li>Pelacakan kemajuan</li>
						</ul>
					</div>
				</div>
				<div class="frame-parent26">
					<div class="frame-parent27">
						<div class="starter-plan-parent4">
							<h1 class="starter-plan6">Paket Premium</h1>
							<div class="frame-wrapper18">
								<div class="parent4">
									<b class="b6">Rp250K</b> 
									<div class="month-wrapper4"> <b class="month6">/bulan</b> </div>
								</div>
							</div>
						</div>
						<div class="line-wrapper5">
							<div class="frame-child11"></div>
						</div>
					</div>
					<div class="frame-wrapper19">
						<button class="order-now-frame" onclick="redirect3(event)"> <b class="order-now2">Daftar Sekarang</b> </button>
					</div>
					<div class="frame-wrapper20">
						<div class="frame-parent28">
							<div class="package-wrapper4"> <b class="package6">Paket</b> </div>
							<div class="line-wrapper6">
								<div class="frame-child12"></div>
							</div>
							<ul class="package-list">
								<li>4 sesi per bulan </li>
								<li>Dukungan prioritas</li>
								<li>Rencana yang dipersonalisasi</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="frame-parent29">
					<div class="frame-parent30">
						<div class="starter-plan-parent5">
							<h1 class="starter-plan7">Paket Ultimate</h1>
							<div class="frame-wrapper21">
								<div class="parent5">
									<b class="b7">Rp350K</b> 
									<div class="month-wrapper5"> <b class="month7">/bulan</b> </div>
								</div>
							</div>
						</div>
						<div class="line-wrapper7">
							<div class="frame-child13"></div>
						</div>
					</div>
					<div class="frame-wrapper22">
						<button class="order-now-wrapper1" onclick="redirect4(event)"> <b class="order-now3">Daftar Sekarang</b> </button>
					</div>
					<div class="frame-parent31">
						<div class="frame-wrapper23">
							<div class="frame-parent32">
								<div class="package-wrapper5"> <b class="package7">Paket</b> </div>
								<div class="frame-child14"></div>
							</div>
						</div>
						<ul class="package-list4">
							<li>Sesi tanpa batas per bulan</li>
							<li>Dukungan 24/7</li>
							<li>Webinar bulanan</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
		<script>
      function redirect1(event) {
        event.preventDefault();
        window.location.href = "checkout-pembayaran-1.html";
      }

      function redirect2(event) {
        event.preventDefault();
        window.location.href = "checkout-pembayaran-2.html";
      }

      function redirect3(event) {
        event.preventDefault();
        window.location.href = "checkout-pembayaran-3.html";
      }

      function redirect4(event) {
        event.preventDefault();
        window.location.href = "checkout-pembayaran-4.html";
      }
    </script>
	</body>
</html>