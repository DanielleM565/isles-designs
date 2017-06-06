<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Isles Designs</title>

		<!--For Internet explorer users please see http://lmgtfy.com/?q=how+to+download+google -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- my custom css-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- mobile first -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!--font awesome for icons and stuff-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Google fonts for header and body-->
		<link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Offside" rel="stylesheet">

		<!-- my custom css-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- My JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

	</head>
	<body>
		<header>
			<!-- nav bar pills -->
			<nav class="nav-pills nav-default">
				<div class="container-fluid">
					<div class="nav-header">
						<button type="button" class="nav-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="nav-brand" href="#">Isles Designs</a>
					</div>
						<div class="collapse nav-collapse" id="myNav">
							<ul class="nav nav-pills nav-right">
								<li role="presentation"> <a href="#about-me">About Me</a></li>
								<li role="presentation"> <a href="#portfolio">Portfolio</a></li>
								<li role="presentation"> <a href="#contact-form">Contact Me</a></li>
							</ul>
						</div> <!-- navbar header -->
					</div> <!-- container -->
				</nav>
		</header>



		<!-- images -->

		<!-- about me -->

		<!-- portfolio -->
		<!-- portfolio section panel style  -->
		<div class="container" id="portfolio">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Portfolio</h2>

				</div> <!-- column -->
			</div> <!-- portfolio tile row -->

			<div class="row">
				<div class="col-md-6 text-center">
					<h3>Pi-O-Mirror</h3>
					<p>A Raspberry Pi powered Smart mirror build on the software side with PHP, mySQL, HTML, CSS, JavaScript and a little bit of Python</p>
				</div>

				<div class="col-md-6 text-center">
					<h3>Game Plan</h3>
					<p> Co-founder and Developer for Game Plan. An interactive web platform that helps entrepreneurs and investors view their business’s progress at-a-glance. Built a mock site using HTML, CSS and Bootstrap for Start-up </p>
				</div>

				<div class="col-md-6 text-center">
					<h3>Angular Attack</h3>
					<p>Developed a Random Number generator using Angular 3 for the first time in 48-hour for an internation Hackathon known as Angular Attack.</p>
				</div>

				<!-- image/ icon for website -->

				<div class="col-md-6 text-center">
					<h3>My Personal Site</h3>
					<p>Well you're on it now! This site is my personal site to showcase my portfolie as a photographer and Web Designer. If you're interested in more of my work check out my git hub or drop me a line below and let's talk!</p>
				</div>
			</div> <!-- row -->

			<!-- git hub hyperlink -->
			<div class="row">
				<div class="col-md-12 text-right">
					<p>See my code at github<a href="https://github.com/DanielleM565"> <i
								class="fa fa-github fa-2x"></i></a> </p>
				</div>
			</div>
			<!-- serious though if you're in dev tool looking at my code go to my github-->

		</div> <!-- container -->



		<!-- contact me section-->
		<div class="container contact">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 center-block">
					<!--Begin Contact Form-->
					<form id="contact-form" method="POST" action="php/mailer.php">
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!--Google reCAPTCHA helps prevent spam and robots -->
						<div class="g-recaptcha" data-sitekey="6LcR1CMUAAAAAIdpnBD_kqkRmGmjjRSLxo7GdfCE"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>
					<!-- end contact form -->

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div> <!-- column-->
			</div> <!-- row -->
		</div> <!-- container -->





<!-- footer with linkedin icon -->
		<footer class="icon">
			<div class="container text-center">
				<div class="row">
					<div>
						<a href="https://www.linkedin.com/in/danielle-martin-6a2b21132"> <i
								class="fa fa-linkedin-square fa-4x"></i></a>
					</div> <!-- icon -->
				</div> <!-- row -->
				<div class="row">
					<p>Connect with me on Linked-in and Thank you for stopping by</p>
				</div>
			</div> <!-- container -->
		</footer>
	</body>
</html>