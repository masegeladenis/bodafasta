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
												<div class="designation">100 Shares &mdash; 20% Equity</div>
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
							<div class="text">Own equity in Bodafasta with long-term profit sharing. 100 shares available representing 20% of the company.</div>
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
							<div class="text">Short-term fixed-return bonds (3&ndash;5 years). 1,000 bonds available at TZS 70,000 each with 15% annual dividend.</div>
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
								<p>Own equity in Bodafasta &mdash; 100 shares available (20% of the company)</p>
							</div>
						</div>

						<div class="calc-info-box">
							<strong>1 Share</strong> = 1 Motorcycle = <strong>TZS 3,500,000</strong> = 0.2% Equity<br>
							Min: TZS 3,500,000 &nbsp;|&nbsp; Max: TZS 350,000,000 (100 shares)
						</div>

						<div class="contact-form">
							<div class="form-group">
								<label>Enter Investment Amount (TZS)</label>
								<div class="input-prefix">
									<span>TZS</span>
									<input type="text" id="shareAmountInput" placeholder="e.g. 3,500,000" oninput="calcSharesByAmount()">
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
								<p>Short-term bonds (3&ndash;5 years) &mdash; 15% annual fixed interest</p>
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
								<span>Annual Dividend Rate</span>
								<strong>15% (fixed)</strong>
							</div>
							<div class="calc-result-row">
								<span>Investment Period</span>
								<strong id="bondPeriod">3 Years</strong>
							</div>
							<div class="calc-profit-box">
								<div class="calc-result-row">
									<span>Total Dividend Earned</span>
									<strong id="bondInterest" class="highlight">&mdash;</strong>
								</div>
								<div class="calc-result-row" style="margin-bottom:0;">
									<span style="font-weight:600;">Principal + Dividends</span>
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
var sharePrice = 3500000;
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
	var annualInterest = cost * bondRate;
	var cumDividend = 0;
	for (var y = 1; y <= years; y++) {
		cumDividend += annualInterest;
		var roi = ((cumDividend / cost) * 100).toFixed(1);
		data.push({
			year: y,
			principal: Math.round(cost),
			interest: Math.round(annualInterest),
			cumDividend: Math.round(cumDividend),
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
	var bikes = shares;
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
	var html = '<thead><tr><th>Year</th><th>Principal</th><th>Annual Dividend (15%)</th><th>Cumulative Dividend</th><th>Cum. ROI</th></tr></thead><tbody>';
	for (var i = 0; i < data.length; i++) {
		html += '<tr><td>Year ' + data[i].year + '</td><td>' + formatTZS(data[i].principal) + '</td><td>' + formatTZS(data[i].interest) + '</td><td>' + formatTZS(data[i].cumDividend) + '</td><td>' + data[i].roi + '%</td></tr>';
	}
	html += '<tr><td><strong>Total (' + bondProjectionYears + ' yrs)</strong></td><td><strong>' + formatTZS(actualCost) + '</strong></td><td><strong>' + formatTZS(data[data.length-1].interest) + '/yr</strong></td><td><strong>' + formatTZS(data[data.length-1].cumDividend) + '</strong></td><td><strong>' + data[data.length-1].roi + '%</strong></td></tr>';
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

	if (amount > sharePrice * 100) {
		resultsEl.style.display = 'none';
		projEl.style.display = 'none';
		errorEl.style.display = 'block';
		errorEl.innerHTML = 'Maximum investment is <strong>' + formatTZS(sharePrice * 100) + '</strong> (100 shares).';
		return;
	}

	errorEl.style.display = 'none';
	var shares = Math.floor(amount / sharePrice);
	var actualCost = shares * sharePrice;
	var bikes = shares;
	var ownership = (shares * 0.2).toFixed(1);
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
	var annualDividend = actualCost * bondRate;
	var totalDividend = annualDividend * bondYears;
	var total = actualCost + totalDividend;
	var roiPct = ((totalDividend / actualCost) * 100).toFixed(1);

	document.getElementById('bondCost').textContent = formatTZS(actualCost);
	document.getElementById('bondCount').textContent = bonds.toLocaleString('en-US') + (bonds === 1 ? ' bond' : ' bonds');
	document.getElementById('bondPeriod').textContent = bondYears + ' Years';
	document.getElementById('bondInterest').textContent = formatTZS(totalDividend);
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
		var bikes = shares;
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
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Principal</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Annual Dividend (15%)</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Cumulative Dividend</th>';
		tableRows += '<th style="padding:11px 15px;text-align:left;border:1px solid #0d5ab8;">Cumulative ROI</th></tr>';
		for (var i = 0; i < data.length; i++) {
			var bg = (i % 2 === 0) ? '#fff' : '#f7f9fc';
			var style = i === data.length - 1 ? 'font-weight:bold;background:#eaf2ff;border-bottom:2px solid #116cd1;' : 'background:' + bg + ';';
			tableRows += '<tr><td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">Year ' + data[i].year + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].principal) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].interest) + '</td>';
			tableRows += '<td style="padding:10px 15px;border:1px solid #e5e5e5;' + style + '">' + formatTZS(data[i].cumDividend) + '</td>';
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
	html += '&#9993; bodafastatanzania@gmail.com<br>';
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
	var basePath = window.location.href.replace(/[^\/]*$/, '');
	var logoUrl = basePath + 'images/logo.png';
	var faviconLink = '<link rel="icon" type="image/png" href="' + basePath + 'images/favicon-96x96.png">';

	var win = window.open('', '_blank');
	win.document.write('<!DOCTYPE html><html><head><meta charset="UTF-8">' + faviconLink + '<title>Bodafasta &mdash; ' + title + '</title>');
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
	win.document.write('<div><span class="c-icon">&#9993;</span><a href="mailto:bodafastatanzania@gmail.com">bodafastatanzania@gmail.com</a></div>');
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
