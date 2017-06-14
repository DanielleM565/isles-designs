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

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">

	</head>


	<body>
		<header>
						<!-- nav bar -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand"><div class="animated slideInLeft">Welcome</div></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="navlink" href="#about-me">About Me</a></li>
							<li><a class="navlink" href="#portfolio">Portfolio</a></li>
							<li><a class="navlink" href="#contact-form">Contact Me</a></li>
						</ul>
					</div><!-- navbar-collapse -->
				</div><!-- container-fluid -->
			</nav>

		</header>

		<!-- images -->
		<section id="peacock">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-12">
						<h1 id="isles">
							Isles
						</h1>
						<h1 id="designs">
							Designs
						</h1>
					</div>
				</div>
			</div>

		</section>

		<!-- about me -->
		<div class="container" id="about-me">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h2>About me:</h2>
								<p>Hello I am Danielle Isles Martin and I truly believe a good balance of art and science is what makes good design. As a Photographer, Web Developer and Scientist I live in that balance between science and art, constantly creating and testing new ideas. If you have and idea and need a website let's talk!</p>
						</div>
					</div>
				</div>
			</div><!-- row -->
		</div><!--container -->


		<!-- portfolio section panel style  -->
		<div class="container portfolio" id="portfolio">

			<div class="row">
				<div class="col-md-12 text-center">
					<div class="panel panel-default" id="title">
						<div class="panel-body">
							<h2>Portfolio</h2>
							<div class="row">
								<div class="col-md-12 text-center">
									<p>Just some of my work, see my code on github <a href="https://github.com/DanielleM565"> <i class="fa fa-github fa-2x"></i></a></p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- row -->
			</div> <!-- portfolio tile row -->

			<!-- first panels top left capstone -->
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Pi-O-Mirror</h3>
							<img src="images/mirror.jpg" class="img-responsive thumbnail" alt="Picture of Raspberry Pi mirror during development">
							<p>A Raspberry Pi powered Smart mirror built on the software side with PHP, mySQL, HTML5, CSS3, JavaScript and a little bit of Python. Displays important information everyone needs in their daily life such as weather, time, date and Slack. </p>
						</div>
					</div>
				</div>

				<!-- 2nd panel game plan -->
				<div class="col-md-6 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Game Plan</h3>
							<img src="images/game-plan.png" class="img-responsive thumbnail" alt="Game Plan logo">
							<p> Co-founder and Developer for Game Plan. An interactive web platform that helps entrepreneurs and investors view their business’s progress at-a-glance. Built a mock site using HTML5, CSS3 and Bootstrap3 for Start-up weekend competition. </p>
						</div>
					</div>
				</div>

			<!-- 3rd panel angular attack -->
				<div class="col-md-6 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Angular Attack</h3>
							<img src="images/angular.jpg" class="img-responsive thumbnail" alt="Screen shot of the angular attack project">
							<p>Developed a Random Number generator learned and used Angular 3/4 for a 48-hour international Hackathon known as Angular Attack. For the first time using Angular, how hard could it be?</p>
						</div>
					</div>
				</div>


		<!-- my site WELCOME -->
				<div class="col-md-6 text-center">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>My Personal Site</h3>
							<img src="images/isles-designs.png" class="img-responsive thumbnail" alt="Isles Designs logo">
							<p>Well you're on it now! This site is my personal site to showcase my portfolio as a photographer and Web Designer. If you're interested in more of my work check out my git hub or drop me a line below.</p>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->


<div class="panel panel default">
	<div class="panel-body">

		<!-- title -->
		<div class="row text-center">
			<h2>Contact Me:</h2>
		</div>

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

	</div> <!-- panel -->
</div>


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