<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8">
<title>Bodafasta Investment Calculator - Calculate Your Returns</title>
<meta name="description" content="Use the Bodafasta investment calculator to estimate your returns from share investments and bond investments in Tanzania's leading motorcycle transportation company."/>

<?php include 'includes/headlink.php'; ?>

<!-- Open Graph (OG) meta tags -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Bodafasta Investment Calculator - Calculate Your Returns" />
<meta property="og:url" content="calculator.php" />
<meta property="og:site_name" content="Bodafasta Tanzania" />
<meta property="og:image" content="images/about/home-about.png" />
<meta property="og:description" content="Estimate your returns from Bodafasta share and bond investments." />

<style>
/* Calculator Section Styles */
.calc-section .boxed-inner {
	position: relative;
	padding: 45px 50px 35px;
	background-color: #ffffff;
	box-shadow: 0 0 30px rgba(0,0,0,0.08);
	margin-bottom: 30px;
}
.calc-section .boxed-inner .calc-header {
	display: flex;
	align-items: center;
	margin-bottom: 25px;
	padding-bottom: 20px;
	border-bottom: 1px solid #eee;
}
.calc-section .boxed-inner .calc-header .icon-box {
	width: 60px;
	height: 60px;
	line-height: 60px;
	text-align: center;
	font-size: 28px;
	color: #116cd1;
	background: #f0f7ff;
	border-radius: 50%;
	margin-right: 20px;
	flex-shrink: 0;
}
.calc-section .boxed-inner .calc-header h4 {
	margin: 0 0 5px;
	font-size: 22px;
}
.calc-section .boxed-inner .calc-header p {
	margin: 0;
	color: #777;
	font-size: 14px;
}
.calc-info-box {
	background: #f0f7ff;
	border-radius: 0px;
	padding: 15px 20px;
	margin-bottom: 25px;
	font-size: 14px;
	line-height: 1.8;
	border-left: 3px solid #116cd1;
}
.calc-result-row {
	display: flex;
	justify-content: space-between;
	margin-bottom: 12px;
}
.calc-result-row span {
	color: #555;
}
.calc-result-row strong.highlight {
	color: #116cd1;
}
.calc-results-box {
	background: #f8f9fa;
	padding: 25px;
	margin-top: 20px;
}
.calc-results-box h5 {
	font-size: 16px;
	margin-bottom: 15px;
	padding-bottom: 10px;
	border-bottom: 1px solid #eee;
}
.calc-profit-box {
	background: #f0f7ff;
	padding: 15px 20px;
	margin-top: 15px;
	border-left: 3px solid #116cd1;
}
.calc-roi-text {
	text-align: center;
	margin-top: 15px;
	padding: 10px;
	background: #116cd1;
	color: #fff;
}
.calc-roi-text span {
	font-size: 14px;
	color: rgba(255,255,255,0.8);
}
.calc-roi-text strong {
	color: #fff;
	font-size: 18px;
}
.bond-year-btn {
	flex: 1;
	padding: 10px;
	border: 2px solid #d9d9d9;
	background: #fff;
	color: #333;
	border-radius: 0px;
	cursor: pointer;
	font-weight: 600;
	transition: all 300ms ease;
}
.bond-year-btn.active {
	border-color: #116cd1;
	background: #116cd1;
	color: #fff;
}
.bond-year-btns {
	display: flex;
	gap: 10px;
}
.input-prefix {
	position: relative;
}
.input-prefix span {
	position: absolute;
	left: 20px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-weight: 600;
	font-size: 14px;
}
.input-prefix input {
	padding-left: 55px !important;
}

/* Disclaimer */
.disclaimer-box {
	background: #fff8e1;
	border-left: 4px solid #ffc107;
	padding: 20px 25px;
	margin-top: 40px;
}
.disclaimer-box h6 {
	color: #f57c00;
	margin-bottom: 8px;
	font-size: 15px;
}
.disclaimer-box p {
	color: #777;
	font-size: 13px;
	margin: 0;
	line-height: 1.6;
}
</style>

</head>

<body>

<div class="page-wrapper">

	<?php include 'includes/navbar.php'; ?>

	<!-- Page Title Section -->
	<div class="page-title-section">
		<div class="auto-container">
			<ul class="post-meta">
				<li><a href="index.php">Home</a></li>
				<li>Investment Calculator</li>
			</ul>
			<h2><span>Investment</span> Calculator</h2>
		</div>
	</div>
	<!-- End Page Title Section -->

	<!-- Project Section -->
	<div class="project-section section-padding">
		<div class="outer-container">
			<div class="row clearfix">

				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">
						
						<!-- Inner Column -->
						<div class="inner-column col-lg-6 col-md-6 col-sm-12">
							<div class="gallery-block">
								<div class="inner-box">
									<div class="image">
										<img src="images/gallery/2.jpg" alt="Share Investment" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<h3><a href="#shareCalc">Share Investment</a></h3>
												<div class="designation">20 Shares — 20% Equity</div>
												<a href="#shareCalc" class="arrow ti-angle-right"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Inner Column -->
						<div class="inner-column col-lg-6 col-md-6 col-sm-12">
							<div class="gallery-block">
								<div class="inner-box">
									<div class="image">
										<img src="images/gallery/3.jpg" alt="Bond Investment" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<h3><a href="#bondCalc">Bond Investment</a></h3>
												<div class="designation">1,000 Bonds — 15% Interest</div>
												<a href="#bondCalc" class="arrow ti-angle-right"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Inner Column -->
						<div class="inner-column col-lg-12 col-md-12 col-sm-12">
							<div class="gallery-block">
								<div class="inner-box">
									<div class="image">
										<img src="images/gallery/4.jpg" alt="Asset-Backed Fleet" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<h3><a href="project-details.php">Asset-Backed Fleet</a></h3>
												<div class="designation">GPS Tracked &amp; Insured</div>
												<a href="project-details.php" class="arrow ti-angle-right"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="gallery-block">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/1.jpg" alt="Calculate Your Returns" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<h3><a href="#shareCalc">Calculate Your Returns</a></h3>
										<div class="designation">Share &amp; Bond Calculators</div>
										<a href="#shareCalc" class="arrow ti-angle-right"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Project Section -->

	<!-- Investment Overview Section -->
	<div class="services-section section-padding">
		<div class="auto-container">
			<div class="sec-title">
				<div class="title">choose your investment type</div>
				<h2><span>Two Ways</span> to Invest in Bodafasta</h2>
			</div>
			<div class="inner-container">
				<div class="row g-0">

					<!-- Service Block -->
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-bar-chart"></span>
							</div>
							<h5><a href="#shareCalc">Share Investment</a></h5>
							<div class="text">Own equity in Bodafasta with long-term profit sharing. 20 shares available representing 20% of the company.</div>
							<a class="read-more" href="#shareCalc">Calculate <span class="ti-angle-right"></span></a>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-money"></span>
							</div>
							<h5><a href="#bondCalc">Bond Investment</a></h5>
							<div class="text">Short-term fixed-return bonds (3–5 years). 1,000 bonds available at TZS 70,000 each with 15% annual interest.</div>
							<a class="read-more" href="#bondCalc">Calculate <span class="ti-angle-right"></span></a>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-shield"></span>
							</div>
							<h5><a href="project-details.php">Asset-Backed</a></h5>
							<div class="text">All investments are backed by physical motorcycle fleet assets — GPS tracked, insured, and revenue-generating.</div>
							<a class="read-more" href="project-details.php">More <span class="ti-angle-right"></span></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Calculator Section -->
	<div class="calc-section contact-page-section section-padding">
		<div class="auto-container">

			<div class="sec-title centered">
				<div class="title">investment calculator</div>
				<h2><span>Enter Your Amount</span> & See Returns</h2>
			</div>

			<div class="row clearfix">

				<!-- Share Investment Calculator -->
				<div id="shareCalc" class="col-lg-6 col-md-12 col-sm-12">
					<div class="boxed-inner">
						<div class="calc-header">
							<div class="icon-box"><span class="ti-bar-chart"></span></div>
							<div>
								<h4>Share Investment</h4>
								<p>Own equity in Bodafasta — 20 shares available (20% of the company)</p>
							</div>
						</div>

						<div class="calc-info-box">
							<strong>1 Share</strong> = 5 Motorcycles = <strong>TZS 17,500,000</strong><br>
							Min: TZS 17,500,000 &nbsp;|&nbsp; Max: TZS 350,000,000 (20 shares)
						</div>

						<div class="contact-form">
							<div class="form-group">
								<label>Enter Investment Amount (TZS)</label>
								<div class="input-prefix">
									<span>TZS</span>
									<input type="text" id="shareAmountInput" placeholder="e.g. 17,500,000" oninput="calcSharesByAmount()">
								</div>
							</div>
						</div>

						<div class="calc-results-box" id="shareResults" style="display:none;">
							<h5><span class="ti-stats-up" style="color:#116cd1;"></span> Your Investment Breakdown</h5>
							<div class="calc-result-row">
								<span>Investment Amount</span>
								<strong id="shareCost" class="highlight">—</strong>
							</div>
							<div class="calc-result-row">
								<span>Shares Acquired</span>
								<strong id="shareCount">—</strong>
							</div>
							<div class="calc-result-row">
								<span>Motorcycles</span>
								<strong id="shareBikes">—</strong>
							</div>
							<div class="calc-result-row">
								<span>Company Ownership</span>
								<strong id="shareOwnership">—</strong>
							</div>
							<div class="calc-profit-box">
								<div class="calc-result-row">
									<span>Est. Profit (Year 1)</span>
									<strong id="shareProfit1" class="highlight">—</strong>
								</div>
								<div class="calc-result-row">
									<span>Est. Profit (Year 2)</span>
									<strong id="shareProfit2" class="highlight">—</strong>
								</div>
								<div class="calc-result-row" style="margin-bottom:0;">
									<span>Est. Profit (Year 3)</span>
									<strong id="shareProfit3" class="highlight">—</strong>
								</div>
							</div>
							<div class="calc-roi-text">
								<span>ROI Year 1: </span><strong id="shareROI">—</strong>
							</div>
						</div>

						<div id="shareError" style="display:none; margin-top:15px; padding:12px 20px; background:#fff0f0; border-left:3px solid #e74c3c; color:#e74c3c; font-size:14px;"></div>
					</div>
				</div>

				<!-- Bond Investment Calculator -->
				<div id="bondCalc" class="col-lg-6 col-md-12 col-sm-12">
					<div class="boxed-inner">
						<div class="calc-header">
							<div class="icon-box"><span class="ti-money"></span></div>
							<div>
								<h4>Bond Investment</h4>
								<p>Short-term bonds (3–5 years) — 15% annual compound interest</p>
							</div>
						</div>

						<div class="calc-info-box">
							<strong>1 Bond</strong> = <strong>TZS 70,000</strong><br>
							Min: TZS 70,000 &nbsp;|&nbsp; Max: TZS 70,000,000 (1,000 bonds)
						</div>

						<div class="contact-form">
							<div class="form-group">
								<label>Enter Investment Amount (TZS)</label>
								<div class="input-prefix">
									<span>TZS</span>
									<input type="text" id="bondAmountInput" placeholder="e.g. 700,000" oninput="calcBondsByAmount()">
								</div>
							</div>
							<div class="form-group">
								<label>Investment Period</label>
								<div class="bond-year-btns">
									<button class="bond-year-btn active" type="button" onclick="setBondYears(3)">3 Years</button>
									<button class="bond-year-btn" type="button" onclick="setBondYears(4)">4 Years</button>
									<button class="bond-year-btn" type="button" onclick="setBondYears(5)">5 Years</button>
								</div>
							</div>
						</div>

						<div class="calc-results-box" id="bondResults" style="display:none;">
							<h5><span class="ti-stats-up" style="color:#116cd1;"></span> Your Investment Breakdown</h5>
							<div class="calc-result-row">
								<span>Investment Amount</span>
								<strong id="bondCost" class="highlight">—</strong>
							</div>
							<div class="calc-result-row">
								<span>Bonds Acquired</span>
								<strong id="bondCount">—</strong>
							</div>
							<div class="calc-result-row">
								<span>Annual Interest Rate</span>
								<strong>15%</strong>
							</div>
							<div class="calc-result-row">
								<span>Investment Period</span>
								<strong id="bondPeriod">3 Years</strong>
							</div>
							<div class="calc-profit-box">
								<div class="calc-result-row">
									<span>Total Interest Earned</span>
									<strong id="bondInterest" class="highlight">—</strong>
								</div>
								<div class="calc-result-row" style="margin-bottom:0;">
									<span style="font-weight:600;">Total Payout</span>
									<strong id="bondTotal" class="highlight" style="font-size:18px;">—</strong>
								</div>
							</div>
							<div class="calc-roi-text">
								<span>Total Return: </span><strong id="bondROI">—</strong>
							</div>
						</div>

						<div id="bondError" style="display:none; margin-top:15px; padding:12px 20px; background:#fff0f0; border-left:3px solid #e74c3c; color:#e74c3c; font-size:14px;"></div>
					</div>
				</div>

			</div>

			<!-- CTA and Disclaimer -->
			<div class="text-center" style="margin-top:30px;">
				<a href="contact.php" class="theme-btn btn-style-one"><span class="txt">Contact Us to Invest</span></a>
				<a href="project-details.php" class="theme-btn btn-style-one" style="margin-left:15px;"><span class="txt">View Full Projections</span></a>
			</div>

			<div class="disclaimer-box">
				<h6><span class="ti-info-alt"></span> Important Disclaimer</h6>
				<p>The figures presented in this calculator are estimates based on Bodafasta's financial projections and business model. Actual returns may vary depending on market conditions, fleet performance, and operational factors. Share investments carry equity risk and returns are based on profit sharing. Bond investments offer fixed-rate returns over the selected period. All investments are backed by physical fleet assets. Please contact us for full investment documentation before making any investment decisions.</p>
			</div>

		</div>
	</div>
	<!-- End Calculator Section -->

	<?php include 'includes/footer.php'; ?>

</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="blog.php">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<script>
var bondYears = 3;
var bondRate = 0.15;
var sharePrice = 17500000;
var bondPrice = 70000;

function formatTZS(n) {
	return 'TZS ' + Math.round(n).toLocaleString('en-US');
}

function parseAmount(str) {
	return parseInt(str.replace(/[^0-9]/g, '')) || 0;
}

function formatInput(el) {
	var val = parseAmount(el.value);
	if (val > 0) {
		var pos = el.selectionStart;
		var oldLen = el.value.length;
		el.value = val.toLocaleString('en-US');
		var newLen = el.value.length;
		el.setSelectionRange(pos + (newLen - oldLen), pos + (newLen - oldLen));
	}
}

function calcSharesByAmount() {
	var input = document.getElementById('shareAmountInput');
	formatInput(input);
	var amount = parseAmount(input.value);
	var errorEl = document.getElementById('shareError');
	var resultsEl = document.getElementById('shareResults');

	if (amount === 0) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'none';
		return;
	}

	if (amount < sharePrice) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Minimum investment is <strong>' + formatTZS(sharePrice) + '</strong> (1 share).';
		return;
	}

	if (amount > sharePrice * 20) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Maximum investment is <strong>' + formatTZS(sharePrice * 20) + '</strong> (20 shares).';
		return;
	}

	errorEl.style.display = 'none';
	var shares = Math.floor(amount / sharePrice);
	var actualCost = shares * sharePrice;
	var bikes = shares * 5;
	var ownership = shares;
	var profitPerBike1 = 1760000;
	var profitPerBike2 = 3696000;
	var profitPerBike3 = 7392000;
	var p1 = bikes * profitPerBike1;
	var p2 = bikes * profitPerBike2;
	var p3 = bikes * profitPerBike3;
	var roi = ((p1 / actualCost) * 100).toFixed(0);

	document.getElementById('shareCost').textContent = formatTZS(actualCost);
	document.getElementById('shareCount').textContent = shares + (shares === 1 ? ' share' : ' shares');
	document.getElementById('shareBikes').textContent = bikes;
	document.getElementById('shareOwnership').textContent = ownership + '%';
	document.getElementById('shareProfit1').textContent = formatTZS(p1);
	document.getElementById('shareProfit2').textContent = formatTZS(p2);
	document.getElementById('shareProfit3').textContent = formatTZS(p3);
	document.getElementById('shareROI').textContent = '~' + roi + '%';

	if (amount > actualCost) {
		errorEl.style.display = 'block';
		errorEl.style.background = '#fff8e1';
		errorEl.style.borderColor = '#ffc107';
		errorEl.style.color = '#856404';
		errorEl.innerHTML = 'Shares are sold in whole units. Your amount covers <strong>' + shares + ' share' + (shares > 1 ? 's' : '') + '</strong> (' + formatTZS(actualCost) + '). Remaining ' + formatTZS(amount - actualCost) + ' would not be allocated.';
	}

	resultsEl.style.display = 'block';
}

function calcBondsByAmount() {
	var input = document.getElementById('bondAmountInput');
	formatInput(input);
	var amount = parseAmount(input.value);
	var errorEl = document.getElementById('bondError');
	var resultsEl = document.getElementById('bondResults');

	if (amount === 0) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'none';
		return;
	}

	if (amount < bondPrice) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Minimum investment is <strong>' + formatTZS(bondPrice) + '</strong> (1 bond).';
		return;
	}

	if (amount > bondPrice * 1000) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Maximum investment is <strong>' + formatTZS(bondPrice * 1000) + '</strong> (1,000 bonds).';
		return;
	}

	errorEl.style.display = 'none';
	var bonds = Math.floor(amount / bondPrice);
	var actualCost = bonds * bondPrice;
	var total = actualCost * Math.pow(1 + bondRate, bondYears);
	var interest = total - actualCost;
	var roiPct = ((interest / actualCost) * 100).toFixed(1);

	document.getElementById('bondCost').textContent = formatTZS(actualCost);
	document.getElementById('bondCount').textContent = bonds.toLocaleString('en-US') + (bonds === 1 ? ' bond' : ' bonds');
	document.getElementById('bondPeriod').textContent = bondYears + ' Years';
	document.getElementById('bondInterest').textContent = formatTZS(interest);
	document.getElementById('bondTotal').textContent = formatTZS(total);
	document.getElementById('bondROI').textContent = '+' + roiPct + '%';

	if (amount > actualCost) {
		errorEl.style.display = 'block';
		errorEl.style.background = '#fff8e1';
		errorEl.style.borderColor = '#ffc107';
		errorEl.style.color = '#856404';
		errorEl.innerHTML = 'Bonds are sold in whole units. Your amount covers <strong>' + bonds.toLocaleString('en-US') + ' bond' + (bonds > 1 ? 's' : '') + '</strong> (' + formatTZS(actualCost) + '). Remaining ' + formatTZS(amount - actualCost) + ' would not be allocated.';
	}

	resultsEl.style.display = 'block';
}

function setBondYears(y) {
	bondYears = y;
	var btns = document.querySelectorAll('.bond-year-btn');
	btns.forEach(function(btn) {
		btn.classList.remove('active');
	});
	btns[y - 3].classList.add('active');
	calcBondsByAmount();
}
</script>

</body>

</html>
