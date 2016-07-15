<?php include('backend/lang/lang.inc.php'); ?>
<!doctype html>
<html itemscope itemtype="http://schema.org/Organization" lang="en">
<head>
	<meta charset="utf-8">

	<meta name="author" content="Timo Denk" />
	<meta name="description" content="Denk Development is a German hardware and software development company." />
	<meta name="keywords" content="Timo, Denk, Development, Hardware, Software" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#23374B" />

	<title>Denk Development</title>

	<!-- icon -->
	<link rel="shortcut icon" type="image/png" href="img/icon@2x.png" />
	<link rel="apple-touch-icon" href="img/icon@2x.png" />

	<link rel="canonical" href="http://development.timodenk.com" />

	<!-- open graph -->
    <meta property="og:title" content="Denk Development" />
    <meta property="og:site_name" content="development.timodenk.com" />
    <meta property="og:url" content="http://development.timodenk.com" />
    <meta property="og:type" content="organization" />
    <meta property="og:description" content="Denk Development is a German hardware and software development company." />
    <meta property="og:image" content="img/icon@2x.png" />
    <meta property="og:image:width" content="292" />
    <meta property="og:image:height" content="292" />

    <!-- schema.org -->
    <meta itemscope itemtype="http://schema.org/Organization" />
	<meta itemprop="name" content="Denk Development">
	<meta itemprop="headline" content="Denk Development">
	<meta itemprop="description" content="Denk Development is a German hardware and software development company.">
	<meta itemprop="image" content="http://development.timodenk.com/img/icon@2x.png">


	<link rel="stylesheet" href="css/bootstrap-custom.min.css" />
	
	<style type="text/css">
		html, body {
			margin: 0;
			padding: 0;

			font-family: Helvetica;

			background: #FFF;
		}

		header {
			position: relative;
			width: 100%;
			text-align: center;

			background-image: url('img/header-bg.jpg');
			background-size: cover;
			background-position: center 0;
		}

		header .header-content {
			padding-top: 25px;
		}

		header .header-content > div.min-height {
			min-height: 500px;
		}

		header .header-content > div:not(.min-height) {
			/* transform led to blurry text */
		    /*position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);*/
		    width: 100%;
		    padding: 0 25px;
		}

		header .logo-main {
			width: 410px;
			max-width: 90%;
		}

		header .title {
			font-size: 40px;
		    font-weight: 300;
		    line-height: 60px;
		    margin-top: 100px;
		    color: #333;
		    position: relative;
		}

		header .email a {
			font-size: 14px;
			font-weight: 300;
			font-style: italic;
			text-decoration: none;
		    color: #3F408E;
		}

		header .email a:hover, header .email a:active, header .email a:focus {
			text-decoration: none;
			color: #27286B;
		}

		header .how-about {
			height: 70px; /* prevent height from changing when the text changes */
		    font-family: monospace;
		    font-weight: 300;
		    color: #333;
		    position: relative;
		    font-size: 28px;
		    margin-top: 30px;
		}


		/* Medium devices (desktops, @screen-md-min and up) */
		@media (min-width: 992px) {
			header, header .header-content {
				min-height: 100vh; /* doesn't work well on mobile devices since the screen height changes */
			}
		}

		/* Small devices */
		@media (max-width: 991px) {
			header .title {
				font-size: 28px;
			}
		}

		/* Extra small devices only (phones, less than 768px) */
		@media (max-width: 767px) { 
			header .title {
				font-size: 24px;
				line-height: 30px;
				margin-top: 30px;
			}

			header .how-about {
				font-size: 16px;
			}

			.visible-xs {
				display: block !important;
			}
		}


		.main {
			position: relative;
		}

		.main .between-section-img {
			position: relative;
			width: 100%;
			height: 150px;
			background-position: center center;
			background-size: cover;
		}
		.main .between-section-img:nth-of-type(1) {
			background-image: url('img/background/IMG_20160609_142736302_150.jpg');
			background-position: right;
		}
		.main .between-section-img:nth-of-type(2) {
			background-image: url('img/background/IMG_20160609_142711827_HDR_150.jpg');
		}
		.main .between-section-img:nth-of-type(3) {
			background-image: url('img/background/IMG_20160423_204314099_HDR_150.jpg');
			background-position: right;
		}

		.main .between-section-img:after {
		    content: '';
		    background: rgba(20, 22, 32, 0.58);
		    left: 0;
		    top: 0;
		    position: absolute;
		    width: 100%;
		    height: 100%;
		}

		.main section {
			position: relative;
			margin: 0;
			padding: 45px 25px 80px;
			text-align: center;
		}

		.top-icon {
			height: 55px;
			margin-top: 0;
			margin-bottom: 20px;
		}

		.main section h1 {
			color: #505458;
			font-size: 30px;
			margin-bottom: 25px;
			margin-top: 0;
		}

		.main section > *:first-child {
			margin-top: 0;
		}

		.main section > *:last-child {
			margin-bottom: 0;
		}

		.main section > div {
			max-width: 750px;
			margin: 0 auto;
		}

		.main section:nth-of-type(odd) {
			background-color: #f9f9f9;
		}

		.main section:nth-of-type(even) {
			background-color: #fff;
		}

		.main section p {
			color: #333;
			line-height: 1.75em;
    		font-size: 15px;
		}
		
		.how-about .how-about-prefix {
			color: #555;
		}

		.typed-cursor {
			opacity: 1;
			animation: blink 0.8s infinite;
		}

		@keyframes blink {
			0% {
				opacity: 1;
			}
			50% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		.customers .customer-dialog {
			text-align: left;
		}

		.customers .customer-dialog p:nth-child(odd)::before {
			content: '<? l('Customer'); ?>: ';
			color: rgb(34, 53, 73);
			font-weight: bold;
		}

		.customers .customer-dialog p:nth-child(even)::before {
			content: 'Denk Development: ';
			color: rgb(49, 139, 164);
			font-weight: bold;
		}

		.customers .customer-images div {
			padding: 0 20px;
			height: 140px;
		}

		.customers .customer-images a {
			max-height: 80px;
			max-width: 100%;
		}

		.customers .customer-images img {
			max-height: 80px;
			max-width: 100%;

		    -webkit-filter: grayscale(100%);
		    filter: grayscale(100%);
		    opacity: .6;

		    transition: ease-in .2s;
		    transition-property: -webkit-filter, filter, opacity;
		}

		.customers .customer-images a.full, .customers .customer-images a.full img {
			width: 100%;
		}

		.customers .customer-images img:hover {
		    -webkit-filter: grayscale(0);
		    filter: grayscale(0);
		    opacity: 1;
		}


		.faq p {
			text-align: left;
		}

		.faq .question {
			display: block;
			font-weight: bold;
			color: #23374B;
			font-size: 18px;
		}

		.faq .question::before {
			content: 'Q. ';
			color: #23374B;
		}

		.faq .answer {
			color: #328CA5;
			font-style: italic;
		}

		.faq .answer::before {
			content: 'A. ';
			color: #328CA5;
		}

        footer {
        	text-align: center;
        	padding: 25px;

            color: white;
            background: #36454f;
            box-shadow: inset 0 -50px 80px rgb(37, 47, 54);
            border-top: 1px solid rgb(37, 47, 54);
        }

        footer .copyright img {
        	height: 20px;
        	vertical-align: middle;
        }
        footer .legal {
		    float: right;
		}

        footer .timodenk {
        	float: left;
        }

        footer a {
        	color: #AAA;
        	transition: color ease-in .2s;
        }

        footer a:hover {
        	color: #FFF;
        	text-decoration: none;
        }

        @-webkit-keyframes fadeIn {
		    from {
		        opacity: 0;
		    }
		    to {
		        opacity: 1;
		    }
		}
		@keyframes fadeIn {
		    from {
		        opacity: 0;
		    }
		    to {
		        opacity: 1;
		    }
		}

		@-webkit-keyframes fadeOut {
		    from {
		        opacity: 1;
		    }
		    to {
		        opacity: 0;
		    }
		}
		@keyframes fadeOut {
		    from {
		        opacity: 1;
		    }
		    to {
		        opacity: 0;
		    }
		}

		.fadeIn {
		    -webkit-animation: fadeIn;
		    animation: fadeIn;
		    opacity: 1;
		}

		.fadeOut {
		    -webkit-animation: fadeOut;
		    animation: fadeOut;
		    opacity: 0;
		}

		.fast {
		    -webkit-animation-duration: 1s;
		    animation-duration: 1s;
		}

		.medium {
		    -webkit-animation-duration: 2.5s;
		    animation-duration: 2.5s;
		}

		.slow {
		    -webkit-animation-duration: 5s;
		    animation-duration: 5s;
		}

		.top20 {
			margin-top: 20px;
		}

		.top40 {
			margin-top: 40px;
		}

		.vcenter {
		    display: flex;
		    align-items: center;
		}

		textarea {
			resize: vertical;
		}

		.full-width {
			width: 100%;
		}

		/* competence icons */
		.ch-item {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			overflow: hidden;
			position: relative;
			cursor: default;
			box-shadow: inset 0 0 0 16px rgba(255,255,255,0.6);
			transition: all 0.4s ease-in-out;

			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
		}

		.ci-1 {
			background-image: url('img/code.svg');
		}
		.ci-1 .ch-info {
			background: rgba(129, 34, 46, 0.8);
		}

		.ci-2 {
			background-image: url('img/microcontroller.svg');
		}
		.ci-2 .ch-info {
			background: rgba(0, 114, 157, 0.8);
		}

		.ch-info {
			position: absolute;
			width: inherit;
			height: inherit;
			border-radius: 50%;
			overflow: hidden;
			opacity: 0;
			transition: all 0.4s ease-in-out;
			transform: scale(0);
		}

		.ch-info h3 {
			color: #fff;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 16px;
			padding: 35px 0 0 0;
			margin: 10px 0;
			text-shadow: 
				0 0 1px #fff, 
				0 1px 2px rgba(0,0,0,0.3);
		}

		.ch-info p.small-text {
			color: #fff;
			padding: 10px 5px;
			font-style: italic;
			margin: 0 20px;
			font-size: 12px;
			border-top: 1px solid rgba(255,255,255,0.5);
			opacity: 0;
			transition: all 1s ease-in-out 0.4s;
		}

		.ch-item:hover {
			box-shadow: 
				inset 0 0 0 1px rgba(255,255,255,0.1),
				0 1px 2px rgba(0,0,0,0.1);
		}

		.ch-item:hover .ch-info {
			transform: scale(1);
			opacity: 1;
		}

		.ch-item:hover .ch-info p {
			opacity: 1;
		}
	</style>
</head>
<body>
	<header id="top">
		<!--<div class="header-bg-image"></div>-->
		<div class="header-content vcenter">
			<div class="min-height"></div>
			<div>
				<img class="logo-main" src="img/logo.svg" alt="&lt;/&gt; Denk Development" />
				<p class="title"><? l('HeaderTitle') ?></p>
				<p class="how-about top40"><span class="how-about-prefix"><? l('HowAbout') ?></span> <span id="how-about-content"></span></p>

				<p class="email"><a href="#get-in-touch"><? l('SeekingForEmailContact'); ?></a></p>
			</div>
		</div>
	</header>
	<main class="main">
		<section>
			<div>
				<img src="img/icon.svg" class="top-icon" alt="Denk Development Icon">
				<h1><? l('WhatIsDenkDevHeading'); ?></h1>
				<p><? l('WhatIsDenkDevParagraph'); ?></p>

				<div class="row top40">
					<div class="col-xs-6">
						<div class="ch-item ci-1 pull-right">
							<div class="ch-info">
								<h3>Software</h3>
								<p class="small-text">Web &middot; C# &middot; Java</p>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="ch-item ci-2 pull-left">
							<div class="ch-info">
								<h3>Hardware</h3>
								<p class="small-text">Arduino &middot; AVR &middot; Teensy</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--<div class="between-section-img"></div>-->

		<section class="customers">
			<div>
				<img src="img/icon.svg" class="top-icon" alt="Denk Development Icon">
				<h1><? l('ExamplesHeading'); ?></h1>
				<p><? l('ExamplesSubtitle'); ?></p>
				<div class="row">
					<div class="col-sm-6 customer-dialog top20">
						<? l('ExamplesDialogSensorDataLogging'); ?>
					</div>
					<hr class="hidden visible-xs">
					<div class="col-sm-6 customer-dialog top20">
						<? l('ExamplesDialogWebsiteWithContactForm'); ?>
					</div>
				</div>
				<hr class="top40">
				<div class="row customer-images">
					<div class="col-xs-6 col-sm-3 vcenter">
						<a href="http://hatchery.io/" target="_blank" class="full">
							<img src="img/customer/hatchery.min.svg" alt="hatchery">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 vcenter">
						<a href="http://www.hombach-forsttechnik.de/" target="_blank">
							<img src="img/customer/hombach-forsttechnik.jpg" alt="Hombach Forsttechnik">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 vcenter">
						<a href="http://kreativekiste.de/" target="_blank">
							<img src="img/customer/kreativekiste.png" alt="Kreative Kiste">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 vcenter">
						<a href="http://www.lsd-lasershowdesign.de/" target="_blank" class="full">
							<img src="img/customer/lsd.min.svg" alt="Laster Show Design">
						</a>
					</div>
				</div>
			</div>
		</section>

		<!--<div class="between-section-img"></div>-->

		<section id="get-in-touch">
			<div>
				<img src="img/icon.svg" class="top-icon" alt="Denk Development Icon">
				<h1><? l('ContactHeading'); ?></h1>
				<p><? l('ContactSubtitle'); ?></p>
				<h3><a href="mailto:development@timodenk.com" target="_blank">development@timodenk.com</a></h3>
				<hr>
				<form id="contact-form">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-1">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><? l('Name'); ?></div>
									<input type="text" class="form-control" id="contact-name" placeholder="<? l('NamePlaceholder'); ?>" required="required">
								</div>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><? l('EmailAddress'); ?></div>
									<input type="email" class="form-control" id="contact-email" placeholder="<? l('EmailAddressPlaceholder'); ?>" required="required">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="form-group">
								<textarea class="form-control" id="contact-message" placeholder="<? l('MessagePlaceholder'); ?>" rows="8" required="required"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<p id="contact-success-msg" class="success hidden"><? l('ContactSuccess'); ?></p>
							<p id="contact-error-msg" class="danger hidden"><? l('ContactError'); ?></p>
							<div class="form-group">
								<input type="submit" id="contact-submit" class="btn btn-primary full-width" value="<? l('ContactSubmit'); ?>" disabled="disabled">
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!--<div class="between-section-img"></div>-->

		<section class="faq">
			<div>
				<img src="img/icon.svg" class="top-icon" alt="Denk Development Icon">
				<h1><? l('FAQHeading'); ?></h1>
				<p>
					<span class="question"><? l('FAQPriceQuestion'); ?></span>
					<span class="answer"><? l('FAQPriceAnswer'); ?></span>
				</p>
				<p>
					<span class="question"><? l('FAQDurationQuestion'); ?></span>
					<span class="answer"><? l('FAQDurationAnswer'); ?></span>
				</p>
				<p>
					<span class="question"><? l('FAQSoftwareExchangeQuestion'); ?></span>
					<span class="answer"><? l('FAQSoftwareExchangeAnswer'); ?></span>
				</p>
				<p>
					<span class="question"><? l('FAQHardwareExchangeQuestion'); ?></span>
					<span class="answer"><? l('FAQHardwareExchangeAnswer'); ?></span>
				</p>
				<hr>
				<p><? l('QuestionNotListed'); ?></p>
			</div>
		</section>
	</main>
	<footer>
	    <div class="copyright">
	        <a class="timodenk" href="http://timodenk.com" target="_blank">Timo Denk</a>
	        <a href="#top">&copy; Denk Development</a>
	        <a class="legal" href="http://timodenk.com/imprint/" target="_blank"><? l('Legal'); ?></a>
	    </div>
	</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script>if (!window.jQuery) { document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>'); }</script>
	<script src="bower_components/typed.js/dist/typed.min.js"></script>
	<script type="text/javascript">
		window.mobileAndTabletCheck = function() {
			var check = false;
			(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
			return check;
		}

		// randomizes array element order in-place
		Array.prototype.shuffle = function() {
		  var swapIndex;
		  for (var i = 0; i < this.length; i++) {
		    swapIndex = Math.floor(Math.random() * this.length);
		    this.swap(i, swapIndex);
		  }
		  return this;
		};


		// swaps two elements
		Array.prototype.swap = function(a, b) {
		  var tmp = this[a];
		  this[a] = this[b];
		  this[b] = tmp;
		  return this;
		};

		// contact form
		(function() {
			$('#contact-form').on('submit', submitForm)
			$('#contact-submit').removeAttr('disabled');

			function submitForm(e) {
				e.preventDefault();

				// hide error and success messages
				$('#contact-error-msg').addClass('hidden');
				$('#contact-success-msg').addClass('hidden');

				// disable button
				$('#contact-submit').attr('disabled', 'disabled');

				var data = {
					'Name': $('#contact-name').val(),
					'Email-Address': $('#contact-email').val(),
					'Message': $('#contact-message').val()
				};

				sendData(data);
			}

			function sendData(data) {
		        // send data to the server
		        jQuery.ajax({
		            type: "POST",
		            url: 'backend/submit.php',
		            data: { 'input': JSON.stringify(data) },
		            success: function (res) {
		                console.log(res);
		                if (res == 1) {
		                	success();
		                }
		                else {
		                    showError();
		                }
		            },
		            error: showError
		        });
			}

		    function showError(res) {
		    	console.log(res);
		        $('#contact-submit').removeAttr('disabled');
		        $('#contact-error-msg').removeClass('hidden');
		    }

		    function success() {
		    	// clear form
		    	$('#contact-name').val('');
				$('#contact-email').val('');
				$('#contact-message').val('');

		        $('#contact-submit').removeAttr('disabled'); // re enable button
		        $('#contact-success-msg').removeClass('hidden');
		    }
		})();


		// typed text in the header
		(function() {
			var wordsRaw = '<? l('HowAboutIdeas'); ?>';
			var words = wordsRaw.split(';');
			// append a questionmark to every idea
			for (var i = 0; i < words.length; i++) {
				words[i] += "?";
			}
			words.shuffle();

			// cache DOM
			var $out = $('#how-about-content');

			if (window.mobileAndTabletCheck()) {
				$out.html(words[0]);
			}
			else { // typed text only on desktop devices
				$out.typed({
					strings: words,
		            // typing speed
		            typeSpeed: 0,
		            // time before typing starts
		            startDelay: 2000,
		            // backspacing speed
		            backSpeed: 0,
		            // time before backspacing
		            backDelay: 1500,
		            // loop
		            loop: true,
		            // false = infinite
		            loopCount: false,
		            // show cursor
		            showCursor: true,
		            // character for cursor
		            cursorChar: "|",
		            // either html or text
		            contentType: 'text'
				});
			}
		})();

	    // smooth scrolling of links like <a href="#bla">
	    var $viewport = $('html, body');
	    $('a[href*="#"]:not([href="#"])').on('click', function(e) {
	        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	            var target = $(this.hash);
	            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	            if (target.length) {
	                $viewport.animate({ 
	                    scrollTop: target.offset().top // scroll to target
	                }, 1000);
	                e.preventDefault();
	            }
	        }
	    });

	    // stop the animation if the user scrolls
	    $viewport.bind('scroll mousedown DOMMouseScroll mousewheel keyup touchstart touchmove touchend', function(e) {
	        if ( e.which > 0 || e.type === 'mousedown' || e.type === 'mousewheel' || e.type === 'touchstart' || e.type === 'touchmove') {
	            $viewport.stop(); // stop scrollTop animation
	        }
	    });


	    // parallax scrolling effect
	    (function(){
	    	return; // disabled 
	    	if (window.mobileAndTabletCheck()) {
	    		return; // no parallax on mobile devices
	    	}
			var parallaxElements = $(".parallax"), defaultSpeed = -0.5;
			var parallax = [];

			// init
			for (var i = 0; i < parallaxElements.length; i++) {
				parallax.push({
					element: parallaxElements[i],
					speed: parseFloat(parallaxElements.eq(i).data('speed') || defaultSpeed),
					offset: parseFloat(parallaxElements.eq(i).data('offset') || '0')
				});
			}

			$(window).on('scroll', function() {
			  	for (var i = 0; i < parallax.length; i++) {
			  		var backgroundPosition = "50% " + (window.pageYOffset * parallax[i].speed + parallax[i].offset) + "px";
			  		parallax[i].element.style.backgroundPosition = backgroundPosition;
			    }
			}).trigger('scroll');
		})();
	</script>
	
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "We uses cookies to ensure you get the best experience on our website. ",
            "dismiss": "Got it!",
            "learnMore": null,
            "link": "https://en.wikipedia.org/wiki/HTTP_cookie",
            "theme": "dark-bottom"
        };
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
        
    <!-- visitors online -->
    <!--<script src="https://cdn.socket.io/socket.io-1.3.7.js"></script>
    <script src="http://const.timodenk.com/visitors-online/client.js"></script>
    <script>
        // number of visitors has changed
        window.visitorsOnlineChanged = function(count) {
            console.log(count);
        };
    </script>-->
    
    <!-- analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-37082212-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>