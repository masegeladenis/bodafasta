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

/* Projection Table */
.projection-table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 15px;
	font-size: 14px;
}
.projection-table th {
	background: #116cd1;
	color: #fff;
	padding: 10px 15px;
	text-align: left;
	font-weight: 600;
	font-size: 13px;
}
.projection-table td {
	padding: 10px 15px;
	border-bottom: 1px solid #eee;
	color: #555;
}
.projection-table tr:nth-child(even) {
	background: #f8f9fa;
}
.projection-table tr:last-child td {
	font-weight: 700;
	color: #222;
	background: #f0f7ff;
	border-bottom: 2px solid #116cd1;
}
.projection-toggle {
	margin-top: 20px;
	padding-top: 15px;
	border-top: 1px solid #eee;
}
.projection-toggle label {
	font-weight: 600;
	margin-bottom: 8px;
	display: block;
	font-size: 14px;
}
.projection-toggle .year-select {
	display: flex;
	gap: 8px;
	flex-wrap: wrap;
	margin-bottom: 15px;
}
.projection-toggle .year-select button {
	padding: 6px 14px;
	border: 1px solid #d9d9d9;
	background: #fff;
	cursor: pointer;
	font-size: 13px;
	transition: all 300ms ease;
}
.projection-toggle .year-select button.active {
	background: #116cd1;
	color: #fff;
	border-color: #116cd1;
}
.export-btns {
	display: flex;
	gap: 10px;
	margin-top: 15px;
}
.export-btns button {
	padding: 10px 20px;
	border: 2px solid #116cd1;
	background: #fff;
	color: #116cd1;
	cursor: pointer;
	font-weight: 600;
	font-size: 13px;
	transition: all 300ms ease;
	display: flex;
	align-items: center;
	gap: 6px;
}
.export-btns button:hover {
	background: #116cd1;
	color: #fff;
}
.export-btns button .ti-download,
.export-btns button .ti-printer,
.export-btns button .ti-file {
	font-size: 14px;
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
				<li><a href="index">Home</a></li>
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
												<div class="designation">20 Shares &mdash; 20% Equity</div>
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
												<div class="designation">1,000 Bonds &mdash; 15% Interest</div>
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
												<h3><a href="project-details">Asset-Backed Fleet</a></h3>
												<div class="designation">GPS Tracked &amp; Insured</div>
												<a href="project-details" class="arrow ti-angle-right"></a>
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
							<div class="text">Short-term fixed-return bonds (3&ndash;5 years). 1,000 bonds available at TZS 70,000 each with 15% annual interest.</div>
							<a class="read-more" href="#bondCalc">Calculate <span class="ti-angle-right"></span></a>
						</div>
					</div>

					<!-- Service Block -->
					<div class="service-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon-box">
								<span class="icon ti-shield"></span>
							</div>
							<h5><a href="project-details">Asset-Backed</a></h5>
							<div class="text">All investments are backed by physical motorcycle fleet assets &mdash; GPS tracked, insured, and revenue-generating.</div>
							<a class="read-more" href="project-details">More <span class="ti-angle-right"></span></a>
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
								<p>Own equity in Bodafasta &mdash; 20 shares available (20% of the company)</p>
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
								<strong id="shareCost" class="highlight">&mdash;</strong>
							</div>
							<div class="calc-result-row">
								<span>Shares Acquired</span>
								<strong id="shareCount">&mdash;</strong>
							</div>
							<div class="calc-result-row">
								<span>Motorcycles</span>
								<strong id="shareBikes">&mdash;</strong>
							</div>
							<div class="calc-result-row">
								<span>Company Ownership</span>
								<strong id="shareOwnership">&mdash;</strong>
							</div>
							<div class="calc-profit-box">
								<div class="calc-result-row">
									<span>Est. Profit (Year 1)</span>
									<strong id="shareProfit1" class="highlight">&mdash;</strong>
								</div>
								<div class="calc-result-row">
									<span>Est. Profit (Year 2)</span>
									<strong id="shareProfit2" class="highlight">&mdash;</strong>
								</div>
								<div class="calc-result-row" style="margin-bottom:0;">
									<span>Est. Profit (Year 3)</span>
									<strong id="shareProfit3" class="highlight">&mdash;</strong>
								</div>
							</div>
							<div class="calc-roi-text">
								<span>ROI Year 1: </span><strong id="shareROI">&mdash;</strong>
							</div>
						</div>

						<div id="shareError" style="display:none; margin-top:15px; padding:12px 20px; background:#fff0f0; border-left:3px solid #e74c3c; color:#e74c3c; font-size:14px;"></div>

						<div class="projection-toggle" id="shareProjectionToggle" style="display:none;">
							<label><span class="ti-calendar" style="color:#116cd1;"></span> Full Year-by-Year Statement</label>
							<div class="year-select" id="shareYearBtns">
								<button class="active" type="button" onclick="setShareYears(3)">3 Yrs</button>
								<button type="button" onclick="setShareYears(5)">5 Yrs</button>
								<button type="button" onclick="setShareYears(7)">7 Yrs</button>
								<button type="button" onclick="setShareYears(10)">10 Yrs</button>
							</div>
							<div style="overflow-x:auto;">
								<table class="projection-table" id="shareProjectionTable"></table>
							</div>
							<div class="export-btns">
								<button type="button" onclick="exportCSV('share')"><span class="ti-download"></span> Export Excel</button>
								<button type="button" onclick="printProjection('share')"><span class="ti-printer"></span> Print</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Bond Investment Calculator -->
				<div id="bondCalc" class="col-lg-6 col-md-12 col-sm-12">
					<div class="boxed-inner">
						<div class="calc-header">
							<div class="icon-box"><span class="ti-money"></span></div>
							<div>
								<h4>Bond Investment</h4>
								<p>Short-term bonds (3&ndash;5 years) &mdash; 15% annual compound interest</p>
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
								<strong id="bondCost" class="highlight">&mdash;</strong>
							</div>
							<div class="calc-result-row">
								<span>Bonds Acquired</span>
								<strong id="bondCount">&mdash;</strong>
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
									<strong id="bondInterest" class="highlight">&mdash;</strong>
								</div>
								<div class="calc-result-row" style="margin-bottom:0;">
									<span style="font-weight:600;">Total Payout</span>
									<strong id="bondTotal" class="highlight" style="font-size:18px;">&mdash;</strong>
								</div>
							</div>
							<div class="calc-roi-text">
								<span>Total Return: </span><strong id="bondROI">&mdash;</strong>
							</div>
						</div>

						<div id="bondError" style="display:none; margin-top:15px; padding:12px 20px; background:#fff0f0; border-left:3px solid #e74c3c; color:#e74c3c; font-size:14px;"></div>

						<div class="projection-toggle" id="bondProjectionToggle" style="display:none;">
							<label><span class="ti-calendar" style="color:#116cd1;"></span> Full Year-by-Year Statement</label>
							<div class="year-select" id="bondYearBtns">
								<button class="active" type="button" onclick="setBondProjectionYears(3)">3 Yrs</button>
								<button type="button" onclick="setBondProjectionYears(5)">5 Yrs</button>
								<button type="button" onclick="setBondProjectionYears(7)">7 Yrs</button>
								<button type="button" onclick="setBondProjectionYears(10)">10 Yrs</button>
							</div>
							<div style="overflow-x:auto;">
								<table class="projection-table" id="bondProjectionTable"></table>
							</div>
							<div class="export-btns">
								<button type="button" onclick="exportCSV('bond')"><span class="ti-download"></span> Export Excel</button>
								<button type="button" onclick="printProjection('bond')"><span class="ti-printer"></span> Print</button>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- CTA and Disclaimer -->
			<div class="text-center" style="margin-top:30px;">
				<a href="contact" class="theme-btn btn-style-one"><span class="txt">Contact Us to Invest</span></a>
				<a href="project-details" class="theme-btn btn-style-one" style="margin-left:15px;"><span class="txt">View Full Projections</span></a>
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
	<form method="post" action="blog">
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
var shareProjectionYears = 3;
var bondProjectionYears = 3;

// Share growth multipliers: Year1 base, then ~2.1x growth per year
var shareGrowthRates = [1, 2.1, 2.0, 1.8, 1.6, 1.5, 1.4, 1.3, 1.25, 1.2];

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

function getShareProjectionData(bikes, cost, years) {
	var data = [];
	var baseProfitPerBike = 1760000;
	var cumProfit = 0;
	var annualProfit = baseProfitPerBike * bikes;

	for (var y = 1; y <= years; y++) {
		if (y > 1 && y - 2 < shareGrowthRates.length) {
			annualProfit = annualProfit * shareGrowthRates[y - 1];
		} else if (y > 1) {
			annualProfit = annualProfit * 1.15;
		}
		cumProfit += annualProfit;
		var roi = ((cumProfit / cost) * 100).toFixed(1);
		data.push({
			year: y,
			annualProfit: Math.round(annualProfit),
			cumProfit: Math.round(cumProfit),
			roi: roi
		});
	}
	return data;
}

function getBondProjectionData(cost, years) {
	var data = [];
	var balance = cost;
	for (var y = 1; y <= years; y++) {
		var interest = balance * bondRate;
		balance += interest;
		var cumInterest = balance - cost;
		var roi = ((cumInterest / cost) * 100).toFixed(1);
		data.push({
			year: y,
			startBal: Math.round(balance - interest),
			interest: Math.round(interest),
			endBal: Math.round(balance),
			cumInterest: Math.round(cumInterest),
			roi: roi
		});
	}
	return data;
}

function renderShareProjection() {
	var amount = parseAmount(document.getElementById('shareAmountInput').value);
	if (amount < sharePrice) return;
	var shares = Math.floor(amount / sharePrice);
	var actualCost = shares * sharePrice;
	var bikes = shares * 5;
	var data = getShareProjectionData(bikes, actualCost, shareProjectionYears);
	var html = '<thead><tr><th>Year</th><th>Est. Annual Profit</th><th>Cumulative Profit</th><th>Cum. ROI</th></tr></thead><tbody>';
	for (var i = 0; i < data.length; i++) {
		html += '<tr><td>Year ' + data[i].year + '</td><td>' + formatTZS(data[i].annualProfit) + '</td><td>' + formatTZS(data[i].cumProfit) + '</td><td>' + data[i].roi + '%</td></tr>';
	}
	html += '<tr><td><strong>Total (' + shareProjectionYears + ' yrs)</strong></td><td></td><td><strong>' + formatTZS(data[data.length-1].cumProfit) + '</strong></td><td><strong>' + data[data.length-1].roi + '%</strong></td></tr>';
	html += '</tbody>';
	document.getElementById('shareProjectionTable').innerHTML = html;
	document.getElementById('shareProjectionToggle').style.display = 'block';
}

function renderBondProjection() {
	var amount = parseAmount(document.getElementById('bondAmountInput').value);
	if (amount < bondPrice) return;
	var bonds = Math.floor(amount / bondPrice);
	var actualCost = bonds * bondPrice;
	var data = getBondProjectionData(actualCost, bondProjectionYears);
	var html = '<thead><tr><th>Year</th><th>Opening Balance</th><th>Interest (15%)</th><th>Closing Balance</th><th>Cum. ROI</th></tr></thead><tbody>';
	for (var i = 0; i < data.length; i++) {
		html += '<tr><td>Year ' + data[i].year + '</td><td>' + formatTZS(data[i].startBal) + '</td><td>' + formatTZS(data[i].interest) + '</td><td>' + formatTZS(data[i].endBal) + '</td><td>' + data[i].roi + '%</td></tr>';
	}
	html += '<tr><td><strong>Total (' + bondProjectionYears + ' yrs)</strong></td><td><strong>' + formatTZS(actualCost) + '</strong></td><td><strong>' + formatTZS(data[data.length-1].cumInterest) + '</strong></td><td><strong>' + formatTZS(data[data.length-1].endBal) + '</strong></td><td><strong>' + data[data.length-1].roi + '%</strong></td></tr>';
	html += '</tbody>';
	document.getElementById('bondProjectionTable').innerHTML = html;
	document.getElementById('bondProjectionToggle').style.display = 'block';
}

function setShareYears(y) {
	shareProjectionYears = y;
	var btns = document.querySelectorAll('#shareYearBtns button');
	btns.forEach(function(b) { b.classList.remove('active'); });
	event.target.classList.add('active');
	renderShareProjection();
}

function setBondProjectionYears(y) {
	bondProjectionYears = y;
	var btns = document.querySelectorAll('#bondYearBtns button');
	btns.forEach(function(b) { b.classList.remove('active'); });
	event.target.classList.add('active');
	renderBondProjection();
}

function calcSharesByAmount() {
	var input = document.getElementById('shareAmountInput');
	formatInput(input);
	var amount = parseAmount(input.value);
	var errorEl = document.getElementById('shareError');
	var resultsEl = document.getElementById('shareResults');
	var projEl = document.getElementById('shareProjectionToggle');

	if (amount === 0) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'none';
		projEl.style.display = 'none';
		return;
	}

	if (amount < sharePrice) {
		resultsEl.style.display = 'none';
		projEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Minimum investment is <strong>' + formatTZS(sharePrice) + '</strong> (1 share).';
		return;
	}

	if (amount > sharePrice * 20) {
		resultsEl.style.display = 'none';
		projEl.style.display = 'none';
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
	renderShareProjection();
}

function calcBondsByAmount() {
	var input = document.getElementById('bondAmountInput');
	formatInput(input);
	var amount = parseAmount(input.value);
	var errorEl = document.getElementById('bondError');
	var resultsEl = document.getElementById('bondResults');
	var projEl = document.getElementById('bondProjectionToggle');

	if (amount === 0) {
		resultsEl.style.display = 'none';
		errorEl.style.display = 'none';
		projEl.style.display = 'none';
		return;
	}

	if (amount < bondPrice) {
		resultsEl.style.display = 'none';
		projEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Minimum investment is <strong>' + formatTZS(bondPrice) + '</strong> (1 bond).';
		return;
	}

	if (amount > bondPrice * 1000) {
		resultsEl.style.display = 'none';
		projEl.style.display = 'none';
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
	renderBondProjection();
}

function setBondYears(y) {
	bondYears = y;
	var btns = document.querySelectorAll('.bond-year-btns .bond-year-btn');
	btns.forEach(function(btn) {
		btn.classList.remove('active');
	});
	btns[y - 3].classList.add('active');
	calcBondsByAmount();
}

function exportCSV(type) {
	var filename = 'bodafasta-';
	var dateStr = new Date().toLocaleDateString('en-US', {year:'numeric', month:'long', day:'numeric'});
	var title, subtitle, investType, investAmount, tableRows;

	if (type === 'share') {
		var amount = parseAmount(document.getElementById('shareAmountInput').value);
		var shares = Math.floor(amount / sharePrice);
		var actualCost = shares * sharePrice;
		var bikes = shares * 5;
		var data = getShareProjectionData(bikes, actualCost, shareProjectionYears);
		title = 'Share Investment Projection';
		subtitle = shares + ' Share' + (shares > 1 ? 's' : '') + ' &mdash; ' + shareProjectionYears + ' Year Projection';
		investType = 'Equity Share';
		investAmount = formatTZS(actualCost);
		tableRows = '<tr style="background:#116cd1;color:#fff;font-weight:bold;font-size:12px;text-transform:uppercase;letter-spacing:0.5px;">';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Year</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Est. Annual Profit</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Cumulative Profit</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Cumulative ROI</th></tr>';
		for (var i = 0; i < data.length; i++) {
			var bg = (i % 2 === 0) ? '#fff' : '#f7f9fc';
			var style = i === data.length - 1 ? 'font-weight:bold;background:#eaf2ff;border-bottom:2px solid #116cd1;' : 'background:' + bg + ';';
			tableRows += '<tr><td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">Year ' + data[i].year + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].annualProfit) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].cumProfit) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + data[i].roi + '%</td></tr>';
		}
		filename += 'share-projection-' + shareProjectionYears + 'yrs.xls';
	} else {
		var amount = parseAmount(document.getElementById('bondAmountInput').value);
		var bonds = Math.floor(amount / bondPrice);
		var actualCost = bonds * bondPrice;
		var data = getBondProjectionData(actualCost, bondProjectionYears);
		title = 'Bond Investment Projection';
		subtitle = bonds.toLocaleString('en-US') + ' Bond' + (bonds > 1 ? 's' : '') + ' &mdash; ' + bondProjectionYears + ' Year Projection';
		investType = 'Fixed-Return Bond';
		investAmount = formatTZS(actualCost);
		tableRows = '<tr style="background:#116cd1;color:#fff;font-weight:bold;font-size:12px;text-transform:uppercase;letter-spacing:0.5px;">';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Year</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Opening Balance</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Interest Earned</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Closing Balance</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Cumulative ROI</th></tr>';
		for (var i = 0; i < data.length; i++) {
			var bg = (i % 2 === 0) ? '#fff' : '#f7f9fc';
			var style = i === data.length - 1 ? 'font-weight:bold;background:#eaf2ff;border-bottom:2px solid #116cd1;' : 'background:' + bg + ';';
			tableRows += '<tr><td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">Year ' + data[i].year + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].startBal) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].interest) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].endBal) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + data[i].roi + '%</td></tr>';
		}
		filename += 'bond-projection-' + bondProjectionYears + 'yrs.xls';
	}

	// Build HTML Excel document matching the print template
	var html = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">';
	html += '<head><meta charset="UTF-8">';
	html += '<!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';
	html += '<x:Name>Projection</x:Name>';
	html += '<x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions>';
	html += '</x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]-->';
	html += '</head><body>';

	// Header
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td colspan="100%" style="background:#0a1628;padding:25px 30px;">';
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td style="color:#fff;font-family:Segoe UI,Arial,sans-serif;">';
	html += '<span style="font-size:22px;font-weight:bold;letter-spacing:1px;">BODAFASTA</span><br>';
	html += '<span style="font-size:11px;color:#aabbcc;">Motorcycle Transportation &bull; Tanzania</span>';
	html += '</td>';
	html += '<td style="text-align:right;font-size:12px;color:#ccd5e0;font-family:Segoe UI,Arial,sans-serif;line-height:1.9;">';
	html += '&#9742; +255 767 306 986<br>';
	html += '&#9993; Victorion@gmail.com<br>';
	html += '&#9873; Dar es Salaam, Tanzania<br>';
	html += '&#127760; bodafasta.co.tz';
	html += '</td>';
	html += '</tr></table></td></tr></table>';

	// Accent bar
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td style="background:#116cd1;height:4px;font-size:1px;">&nbsp;</td>';
	html += '</tr></table>';

	// Title section
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td style="padding:25px 30px 18px;border-bottom:1px solid #e8e8e8;font-family:Segoe UI,Arial,sans-serif;">';
	html += '<span style="font-size:22px;color:#116cd1;font-weight:bold;">' + title + '</span><br>';
	html += '<span style="font-size:14px;color:#555;font-weight:500;">' + subtitle + '</span><br><br>';
	html += '<span style="font-size:11px;color:#888;">&#128197; Generated: ' + dateStr + ' &nbsp;&nbsp;&nbsp; ';
	html += '&#128200; Investment Type: ' + investType + ' &nbsp;&nbsp;&nbsp; ';
	html += '&#128176; Amount: ' + investAmount + '</span>';
	html += '</td></tr></table>';

	// Data table
	html += '<table width="100%" cellpadding="0" cellspacing="0" style="margin:20px 0;font-family:Segoe UI,Arial,sans-serif;font-size:13px;border-collapse:collapse;">';
	html += tableRows;
	html += '</table>';

	// Footer
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td style="padding:18px 0;border-top:2px solid #116cd1;font-family:Segoe UI,Arial,sans-serif;">';
	html += '<table width="100%" cellpadding="0" cellspacing="0"><tr>';
	html += '<td style="font-size:11px;color:#999;line-height:1.7;max-width:55%;vertical-align:top;">';
	html += '<em>This is an estimate based on Bodafasta financial projections. Actual returns may vary based on market conditions and business performance.</em><br>';
	html += 'For full investment details visit <span style="color:#116cd1;">bodafasta.co.tz</span> or contact us directly.';
	html += '</td>';
	html += '<td style="text-align:right;font-size:11px;color:#999;line-height:1.7;vertical-align:top;">';
	html += '<strong style="color:#333;">Bodafasta Tanzania</strong><br>Dar es Salaam, Tanzania';
	html += '</td>';
	html += '</tr></table></td></tr></table>';

	html += '</body></html>';

	var blob = new Blob([html], { type: 'application/vnd.ms-excel' });
	var link = document.createElement('a');
	link.href = URL.createObjectURL(blob);
	link.download = filename;
	link.click();
	URL.revokeObjectURL(link.href);
}

function printProjection(type) {
	var table, title, subtitle;
	if (type === 'share') {
		table = document.getElementById('shareProjectionTable').outerHTML;
		var amount = parseAmount(document.getElementById('shareAmountInput').value);
		var shares = Math.floor(amount / sharePrice);
		title = 'Share Investment Projection';
		subtitle = shares + ' Share' + (shares > 1 ? 's' : '') + ' &mdash; ' + shareProjectionYears + ' Year Projection';
	} else {
		table = document.getElementById('bondProjectionTable').outerHTML;
		var amount = parseAmount(document.getElementById('bondAmountInput').value);
		var bonds = Math.floor(amount / bondPrice);
		title = 'Bond Investment Projection';
		subtitle = bonds.toLocaleString('en-US') + ' Bond' + (bonds > 1 ? 's' : '') + ' &mdash; ' + bondProjectionYears + ' Year Projection';
	}

	var dateStr = new Date().toLocaleDateString('en-US', {year:'numeric', month:'long', day:'numeric'});
	var logoUrl = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK8AAABQCAYAAABvViW5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAGjGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4xLWMwMDAgNzkuN2E3YTIzNiwgMjAyMS8wOC8xMi0wMDoyNToyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OGVjODkyODktY2IwMS00YTRjLWE0MTUtNWJhNzJjOGNmNjNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2MkFDMzNENTBBRTExRUJCMjVCRTcwOEQzNDU1QkRBIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmM4ZmU4NTk1LWU3MWMtYTY0Ni04ZTI0LWQ5MWZmOWFhOTdjMSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjYtMDMtMTJUMDg6MDQ6MjkrMDM6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDI2LTAzLTEyVDE0OjI4OjIwKzAzOjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDI2LTAzLTEyVDE0OjI4OjIwKzAzOjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ZmI4ZjgwNmEtYjg1ZC00ZGQ3LTk5NWYtYzY3YmM5N2MzMDdjIiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6Njk2MTUzYjAtYjFkMi05NzQwLTlkNDktNDU2MGIwZjk0YTAwIi8+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmM4ZmU4NTk1LWU3MWMtYTY0Ni04ZTI0LWQ5MWZmOWFhOTdjMSIgc3RFdnQ6d2hlbj0iMjAyNi0wMy0xMlQxNDoyODoyMCswMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIDIyLjUgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8cGhvdG9zaG9wOkRvY3VtZW50QW5jZXN0b3JzPiA8cmRmOkJhZz4gPHJkZjpsaT40RjYwRTVDMEM5MzU4MzgzQUM4OEU2RUI0NTcxQ0U1NzwvcmRmOmxpPiA8L3JkZjpCYWc+IDwvcGhvdG9zaG9wOkRvY3VtZW50QW5jZXN0b3JzPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvuBwL0AABWzSURBVHic7Z15XFVl/sff9wIXBNkEFEQJF0DzCCIuaaVkmqaZzbVpZvTXK09q21T+sqnJtmle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';

	var win = window.open('', '_blank');
	win.document.write('<!DOCTYPE html><html><head><meta charset="UTF-8"><link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAQAElEQVR4AexbCWBURbY9r7uTEAJhCYQ9CZvs+44LiuPo+EdmcEFFwWVmUAEFhfkqCoji+FVAQHBh3EDFZVT8M+oXBUdE2SIIyCL7JlsIawgJSSf55xTdkSTdkCbdD2FeqNv1Xr1az626de+twoUw/BUUFCSR+pEmk+aSNpEySPmkcz1oDBqLxqSxaYwaa1IYoMMZM4CoViM9QFrEjmwjzSDdS+pJakCqQLJI53rQGDQWjUlj0xg11m0aO0kYVDvTQYbMADao2T6ZDaaRxpO6kP5Tg8YuDNKIi1ZGyKsiJAawkZFEeitJs0Azg49OIALCQphs9WHEpNKFUjGAlXYgSdQ8zmrVGCMnBEBA2DwurEgdAnwvkXRaBrCifiyVStJyY+SEUiAgrFJ92J0y+ykZwAoeYGltOOIsH50QAgLCbIYPw6DFgjLAV1AbTNDCzodSITDeh2XAzAEZwAISOw74ASE7o0QxQZiWKFyCAQRfm8f0EjmdhLIiMN2HbZF6SjCAX6eSJL8Ynafh7AxLmArbIq0XYQA5JD1fO3iRTM5L2BDo4sO4sMJCBvCDrLgxhV+ch0ghMMaHtam/kAF8G07SMmHkhAgiIIyFtWnCMIAckTNpsElxfuxAYLAP80JvaH+2Ks4wcoINCAhrYV7IgD42NOo0URQBg7mLS0Gbr6P5FAXHjjdpREnaA3rY0ZrTRkAEeogBnQJ+chLtQKCTGNDCjpacNgIi0EIMSAn4KeyJToUBEEgRAxIDfHCS7EEgUQyIs6ctp5UACMSJATIKAnxzkmxAwBIDbGjHaSIYAg4DgiFjU7qtDPDmFSDtYDYWr92Haf9ah4f//j3unbwIgyYttJ0Gs81hLyzB0+/8iE8WbsfGXUeQdTwPBQU2Ie9rxhYG5BH4fYeyMXXWGvQd+zWGTlmEaZ+sw+zUnfj2x71YsKqslIbFa9KwbP1+LN+wH9//lM4600jB6/2ObX71w268/+/NeHzGctz59Hzc89wCLN+4H8eOe33wRD6KOAOyc/KwjKAMnLgAb83ZxBWQhaNZXhzPzUOuNx/ePFEB49AJsFApLhrXXZKMCYO6YNqwCw29eH83PNS3FZomVUaUx4W8/GB15yOHfdDMP5iRg+Wb9uP+qYsx6cM12H/kOFdD5JdDRBkg8L9athvDX1qCDT8fgd7DNaSYKDeu6lwHk+7tin5XNEImmfrNyj2Y/f1OrNp6yID/9ICOGNanFWonlIfHffqhaqUK+Fnzt+LJN5djz4GsiDPh9L3Cmf15KXaW/LQPT81cgUOcXZqFZ1ZT4FJVKkTjrmua4tDRHDw4LdWIkVc+XY/pszdiMmfwkOcXYfoXG9G6QRWMuq0dqleKgVVKhVsr4puVe/DSP38y9QfuQelST5crYgzYezALE95fhYxjuciPwM4mOX0g4zj2HcrCpl0ZFGu5FGP5yKe4kXgzM/mbbRBTGtauiOYplWHx3+kA8X9XHZ8v2Yk5S3chl2LSnx7uOCIM8LLD73Fz25GWaeRvuDut+iTO5lPktG2UAIkjpRWnuFgPrr04GerHys0HUcB/xfOc6l1tSFnYf/j4qbKV6VvYGcADHs56LzR7As0cy7LMxijQglF0lAtul3XKgXkp4tZzX3ExX3z5qBJ5PW4Ld/dqitrVy1PVXIkDZlMFXGrf7UI0N2fl4WuJsv4ErVytss8W7YjYXhB2BlACYCFVwvTD2ey0fyi/xAK390XJuP+GFkHp3t7N0aRepcJCAslNQAVaTLQb5UgxZJKXK83/rTCz7+GCupXQs31tTP98I7bsOWr6ojKN68bjuh4p6H9lI/O9Qrkos0GrHl/RIpGXjF7A8RzPzQ9x/RSpJuhL2BmgFSC9XrI4UKsxnHltGlZFjzY1g9KFLWugZkKsKW5ZFirGRuH6S1Iw/p7O+GhMT8wZdxVmP3slxtzenjPZjeM5eSav/0cz+/4bWmL9jsOYu2wXcqjy1uVK+J8BnfD2oz3wyK1tcN91LTDu7s745KkrcD0ZUi7K7S9eJC7gjNqw48gJ2yACe5mrSGtheFEftWyDqZsZWbkY9cYy9HpkTlDqM+bf+Hr5HsTGuNGrez3MGns59frWaEmNJo0GXeq6dKzachBx5TzYmZ6JI9zo/V2XiKlNtbNpUiUsWrPPbMopNSviuUFdcGnbmjiW7cU33DskVtZsO2jsiL/e1Ap9LquP8jEefzWFscaRyTJerjY9F34I00PYGaB+cdIoCkhikPRtGWHBSIOVXB9ybQsDfFZ2HtXZleg9ci4GTlyIEa98j7dp1ImZ73212dgX/sZcHNGtv21kmDP0+ub46InLMWFgZyTXrGD0+r+M+w7DX1yCx934AX965ltM+GAVcrlCBlClldjT6vHXdXKcn3/yW/ie2d3wVaaaCsyP+dVTIblclpltSYlxSCEYxalKxWjKYsvkr8hNdeAfmuG/utXDD7Si+z81D7Pmb8Nh6vxZdBPEUFzcefUFBtDUdfsLNS1KKzOLr+hQ26TJCk6sHIuGteONqKpeuRweu70crushYx+TTzH6XDEyl60J5L25TI6hGVXJEpqtl/gk7A4L1yE0G/IbAvCx3wfCLMK0YDf5jczLAhSi3C+0bJ+Dy9rWwdH06Rr6+DAcJvFaLQBBQN1BmJ1SMwVhaq0cyc+D/s6jnV6KBpjwj6Ogb8felSF23Diord0R73GiWXBkP922NB7hHRLGtHG6ur3++AXkUMVoB0WSuvz47YtsYIEtYDjAt/dEEtTjNnLvZGFLxcVHQ7JaPRpaoX30UGBZ/Wtavgl4XJuMTqoY/78s0M53JJwIzSEPSy0YaZ3OW7sT/Lf6Z/p48bNt7FO9+tYkukcPQzM/M/sVA3HPgGCQ2tadwnqi4bWQbA6QV7aFvRa7ohavTUJw20R0sOVunWnn6bmLpIt6BzQRRe4bQILaQaLrrmibYsjsDH9LKlaGkb35SHpemOhOkjXmpQu5lm1oBoje/3IS7xi/A0CmL8TLd4ZoUKtOpaXV4XBbSaXB5xQmWtyvYxoDSDCjKYxn5DIqSRdS9tQrcBEarot0FCRj4x2ZIqVERb8zeALk4/MyB70/Yi1z88bhPDG3t9sPGCEuk/Jdoy+aGKw1KmpryVatUDrdd2RgsArmii6u0vqojFp3oZcSqD61iyeguzapTZudh1/4saGNuTZvhiTs7GDXypp4N8AW9nT9tO2zElUCTvJfLoVbVWLRIqYI/XJiEaBppCfEx0MYvZ9073GjVk+E3tjLfk2tUQG2uNPmHxlFDSqoRZzZ0qb5iuvLaRb8uBtDCrUT/fgZdy62o808c3NUYXykE7G2KDy83yh+oFQn4CrFRqMqNWJu1DKrXH7oEL97fHb0vToHEXd/LGyDa4zKM0j4whwaZh9b0cLqnZ9IYe2tED7z63xehFfeUY9TzR7/+gzmrUFm7wFc7vwoGCFDN5PI0vARSg1oVMbp/O2Rk5uKhad+bUzTJa8lxaTkDft8EU4d2wwe0irU62jaqit37jxn3sU61dMKllZNIsaNVIEPtGR49PjFjObRxSzxVoKMuj3vEbJ7K3c7TsB+3HOBmnS9MbKWzygABL4Akh+/4XWNMGdKN1q/HbMD3PPcdhvDoUmcKEgtSEWOjPXQ/tMOtPICRtvOvBTvw15dS0WvEHNz5zHzM+GKjkePzVuwxxtlFrWuaVSBEpfl8Ro3o2tFz0XvUXDJ1Hn734BfmXFqbvZfMUD676awxQMCn0EUwlD6Zfzx2Ga6jr2c+gbuRbgjp9z/S1aBZL0DEqFqU2evo29Hs7vXIl7hl7DxM/HA15q3YjX0nOf60MR+la+KzRT/jZu4ZSRRfakv1iDTrd6Ufw6adR3D4JBtC384G2c4AeTW1CY7s1xZvP9IDF7WqgZlzNqPvE19j0kdr6Ns5BgEvIP2AWHyoSJGRyhM2yfNdFDde7geS1yfnYzYTCvgrG0CbcccLqkFijUlFgvIUSThLL7YywO2ykJxYwcjvdpTbT7+zEndQ/r5BS1RqoWR8fgBEBdax43nmHKE4c4rj5uJySaGrY/zALthDTeprrhCvt6B4tl/Nu60MiOUm24tqonT4eyYugGSyxIBkfHHcxSwZXjpOvOOqxpAPqW71OKqWwbGLcrvQumEVvPzAhVxJmdBZcRqPRgMxNXgt9n6xlQHRHjca1Yk3Dra9B7Kp7/+idXDicgN2o3rlcujZrpbx2U+5r5u59XB113pYShd0C6qMNarEmlOt4jDJQXcJzxie/HNHrN56EI++uszo9t6ztLkW71+w9zAyIFgTv6RrJmbyPKAW/fXl6cuX6im9X777PpfWx4hb2kCgD+vTEto8ZZlO/GA1BtEF/eRbK+jDyYUOa6JoaPlr1f5QPsaDq7rUNQ42XcoaM305dBFM4sqf79ca28qALMpx3UZrllyJYLdGP/rtn/xzB4zjSZes3Mr0ZOr7w68sxbAXl2DKx2vNrQTp7rrlMI+HNDpkr8VV4HZZxn0gK1hi7S7aBvNW7sa493802o2YjXPgz1YG6GhQVxHHv7cK0oSu5qz1UpuR1/PuCQuMTq9bCCs3HTBGmEUA5aGsQKtXq+XVzzZAwN7GPUH7Q3z5aNzQoz59OY0g7+jUWWuNj4jFzplgKwMKCIsMIrkFZH32+9s8cxXwk4U7oHtExrvJ3Vjqo/xA19I2mDCos3ExDKG9EB/ngS5eXdy6Bu7kgcxgOuf6/qYhpEW9/tl6iigvWzi3QtgZoFlrZMMpcCDGZgOWSNLzyVmjo9w8jKmNt2gjPHhza3RsUh0SWTf1rI93Rl4GuR10OnYjz3Al96d+vAb/XLAdWTlFD+ZPrjMcz1Y4KglQR9gZoDYonhWFTJLr7S9IgICXtqND8+f+sQp/4wb8KQ9g9F0Wc6/uScbFPPK1ZfiUFq8YGXJjIRZwRQQpIOzVSp2Ul9IKcYDKLhfygze3MgfqH83figHjvzOH77O+3YZR9FZKI5JmU5Wu5hf+dy10wibjTWUjRRqH9iGP2wU9h7sdV7grtCwL3VvWoMEUenfr0wtanQckMp7e+HyjuUIiEWVZFuSMu+WKhkZ0eehWbknfv/tMl1oIg7bYRuN68ZCqC/YjhKKlyhp2BrC/6NY8EfJwhtJf5U2kEWZZFj2aB7D/yImbdS6+12D65Hu7mrtAkz9cY9zGdWgVR7nD3v0SoHnI7O4cTwxtj9CnVInqSiSEfQSWZfHsloZR5zrmhkOJFoMlUEVyuU4MUaqpZr6y6mz3QEYO5Mt/fPpyo+PrG5sBTmRHpP5cbETiVJa4ZUWmsbAzQGBIXt54WQPUS4w77SVb5RcRf6QdyjZ6frvGCeYOkT9dV8W/XbWXPn4v9M1FLNKZV4xSnkiRzhx0+JNQKSZoE2X9EBEGqFPSYh6gS0EGk6uUs2fbnqM4wlOwatwH9N+OZIARa1VnGNmxSTVcRj+R7vJ8qXv73nzzLRI/MVFu6H/g6C5TLdjqhAAAA5xJREFUVARFXcQY4KHs7Ny0Oh7u2waVK0YbAE8HVDoPVibzTEDX2m/hqddD1Ih+26mOucTbn26LsX/qYFbG1zy4WUFr2RshR1ssvbaX0NjT9Xa5R07X77J8jxgD1Ckt4Z7ta0GH5o3rxptr5f4Zre/FSW5puSpmztmE7ONeyNCSr+jZuzthcO9mRj1dsDoNk3gSJou6ePmyvuuwSKqwDvYf6dcWNavGwrJO1eOytojw2wHFuyQm6D7OC0O741a6DRLpSKvA0y0tcfl3PFzeWi1+ys7xGt3/vucXm//CepAbcAaPGLfsPoqxM1Zg5GtLoasmLgvmpMtf7sxilzkz1oyX66NtwwRz/WXIdc0hRliWVXw4YX93hb3GABVqZsnPP6h3c8x89FLouok2tyspXnQkKbvhZGrPY8QEbnwfz9+GZ95diWfpvJv00WpkZOeibaMEdGuRaGyNk8uE+iy3ts4d+lBZGNW/LV578GLjc1L95WM8AUYRmSRbGODvumZpYpVy0OWrAdc0wVN/6Yjn7+uKqUO6BaTnmT6BR4sSQTonCJbvTNJ1A2P8wM6Q5f37bkloVDveHAjZMOn9cJjYVgaYFp2fIgg4DCgCh/0vYoBsIPtbdloUAgViQKaeHDorCGSKAWlnpemyNHr+lE0TA7aeP+M550ayVQxYfc51+/zp8GoxIPX8Gc85N5JUMWDeOdft86fD81yWZW3neBaTnGAvAouFvVaAmn1fPw7ZioDB3M+AGWzaMcgIgk1BWAvzE+5oLoV0NjyF5AR7EJjiw/wEA3xtjmMszjByQgQREMbC2jThF0E6+dFmPNqkOj+RRGA0Z7+wNm0UMkBv/PAE4yAaEb84oawISPMRxoX1FGGAL3UQYy0TRk4IIwLCVNgWqbIEA7gKljLHbSQnhBeB23zYFqm1BAP0lRnfZDyM5ITwIDDMh2mJ2gIyQLlYYAJjhwkEoYxB4AvLgNUEZYBy+5jQn8+SX4ycEAICwqy/D8OgxU7JAJViBRJHnfjsaEcEoZRBWHXyYXfKIqdlgEqzoqWkrnweRRJnGTkhAALCZpSwIkmZCZClaFKpGOAvwkqlw6bw/XmSGmPkBCIgLIRJig8jJpUuhMQAVckGtpPu43MiSZu0lhsf/yODxi4MEoUJqdDCLS0aITPAXzEbSydNIEk0JTNdm7VmwVd83kw6StLMYHTuBvZcY9BYNCaNTWPUWJM1dpIwkDOTWUMP/w8AAP//xhRbVQAAAAZJREFUAwBZWi2OS2Z06AAAAABJRU5ErkJggg=="><title>Bodafasta &mdash; ' + title + '</title>');
	win.document.write('<style>');
	win.document.write('*{margin:0;padding:0;box-sizing:border-box;}');
	win.document.write('body{font-family:"Segoe UI",Arial,sans-serif;color:#333;background:#fff;}');
	win.document.write('@media print{body{-webkit-print-color-adjust:exact;print-color-adjust:exact;}}');

	// Header
	win.document.write('.doc-header{background:linear-gradient(135deg,#0a1628 0%,#116cd1 100%);color:#fff;padding:30px 40px;display:flex;align-items:center;justify-content:space-between;}');
	win.document.write('.doc-header .logo-side{display:flex;align-items:center;gap:18px;}');
	win.document.write('.doc-header .logo-side img{height:52px;filter:brightness(0) invert(1);}');
	win.document.write('.doc-header .logo-side .brand{display:flex;flex-direction:column;}');
	win.document.write('.doc-header .logo-side .brand-name{font-size:22px;font-weight:700;letter-spacing:1px;}');
	win.document.write('.doc-header .logo-side .brand-tag{font-size:11px;opacity:.75;margin-top:2px;letter-spacing:.5px;}');
	win.document.write('.doc-header .contact-side{text-align:right;font-size:12px;line-height:1.9;opacity:.9;}');
	win.document.write('.doc-header .contact-side a{color:#fff;text-decoration:none;}');
	win.document.write('.doc-header .contact-side .c-icon{display:inline-block;width:16px;text-align:center;margin-right:5px;opacity:.7;}');

	// Blue accent bar
	win.document.write('.accent-bar{height:4px;background:linear-gradient(90deg,#116cd1 0%,#4da3ff 50%,#116cd1 100%);}');

	// Title section
	win.document.write('.title-section{padding:30px 40px 20px;border-bottom:1px solid #e8e8e8;}');
	win.document.write('.title-section h1{font-size:22px;color:#116cd1;font-weight:700;margin-bottom:4px;}');
	win.document.write('.title-section .subtitle{font-size:14px;color:#555;font-weight:500;}');
	win.document.write('.title-section .doc-meta{display:flex;gap:30px;margin-top:12px;font-size:11px;color:#888;}');
	win.document.write('.title-section .doc-meta span{display:flex;align-items:center;gap:5px;}');

	// Table
	win.document.write('.table-wrap{padding:20px 40px 30px;}');
	win.document.write('table{width:100%;border-collapse:collapse;font-size:13px;}');
	win.document.write('th{background:#116cd1;color:#fff;padding:11px 15px;text-align:left;font-weight:600;font-size:12px;text-transform:uppercase;letter-spacing:.5px;}');
	win.document.write('td{padding:10px 15px;border-bottom:1px solid #e5e5e5;}');
	win.document.write('tr:nth-child(even){background:#f7f9fc;}');
	win.document.write('tr:last-child td{font-weight:700;background:#eaf2ff;border-bottom:2px solid #116cd1;}');

	// Footer
	win.document.write('.doc-footer{margin:0 40px;padding:20px 0;border-top:2px solid #116cd1;display:flex;justify-content:space-between;align-items:flex-start;font-size:11px;color:#999;}');
	win.document.write('.doc-footer .left{max-width:55%;line-height:1.7;}');
	win.document.write('.doc-footer .right{text-align:right;line-height:1.7;}');
	win.document.write('.doc-footer .right a{color:#116cd1;text-decoration:none;}');
	win.document.write('.doc-footer .disclaimer{font-style:italic;}');

	win.document.write('</style></head><body>');

	// Header with logo + contact
	win.document.write('<div class="doc-header">');
	win.document.write('<div class="logo-side"><img src="' + logoUrl + '" alt="Bodafasta"><div class="brand"><span class="brand-name">BODAFASTA</span><span class="brand-tag">Motorcycle Transportation &bull; Tanzania</span></div></div>');
	win.document.write('<div class="contact-side">');
	win.document.write('<div><span class="c-icon">&#9742;</span>+255 767 306 986</div>');
	win.document.write('<div><span class="c-icon">&#9993;</span><a href="mailto:Victorion@gmail.com">Victorion@gmail.com</a></div>');
	win.document.write('<div><span class="c-icon">&#9873;</span>Dar es Salaam, Tanzania</div>');
	win.document.write('<div><span class="c-icon">&#127760;</span><a href="https://bodafasta.co.tz">bodafasta.co.tz</a></div>');
	win.document.write('</div></div>');

	// Accent bar
	win.document.write('<div class="accent-bar"></div>');

	// Title section
	win.document.write('<div class="title-section">');
	win.document.write('<h1>' + title + '</h1>');
	win.document.write('<div class="subtitle">' + subtitle + '</div>');
	win.document.write('<div class="doc-meta">');
	win.document.write('<span>&#128197; Generated: ' + dateStr + '</span>');
	win.document.write('<span>&#128200; Investment Type: ' + (type === 'share' ? 'Equity Share' : 'Fixed-Return Bond') + '</span>');
	win.document.write('<span>&#128176; Amount: ' + formatTZS(type === 'share' ? Math.floor(parseAmount(document.getElementById('shareAmountInput').value) / sharePrice) * sharePrice : Math.floor(parseAmount(document.getElementById('bondAmountInput').value) / bondPrice) * bondPrice) + '</span>');
	win.document.write('</div></div>');

	// Table
	win.document.write('<div class="table-wrap">');
	win.document.write(table);
	win.document.write('</div>');

	// Footer
	win.document.write('<div class="doc-footer">');
	win.document.write('<div class="left"><div class="disclaimer">This is an estimate based on Bodafasta financial projections. Actual returns may vary based on market conditions and business performance.</div><div style="margin-top:6px;">For full investment details visit <a href="https://bodafasta.co.tz" style="color:#116cd1;">bodafasta.co.tz</a> or contact us directly.</div></div>');
	win.document.write('<div class="right"><strong style="color:#333;">Bodafasta Tanzania</strong><br>Dar es Salaam, Tanzania<br><a href="https://share.google/XMSp50emSaLLvYFLx">View Our Location</a></div>');
	win.document.write('</div>');

	win.document.write('</body></html>');
	win.document.close();
	// Wait for logo image to render before triggering print
	var logoImg = win.document.querySelector('.logo-side img');
	if (logoImg && !logoImg.complete) {
		logoImg.onload = function() { win.print(); };
		logoImg.onerror = function() { win.print(); };
	} else {
		setTimeout(function() { win.print(); }, 200);
	}
}
</script>

</body>

</html>
