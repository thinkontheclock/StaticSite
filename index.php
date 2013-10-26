<? session_start(); ?>
<!doctype html>
<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/prefixfree.min.js"></script>
		<title></title>
		<link href='//fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto+Slab:400,300|Alegreya:400,900,700|Mrs+Sheppards' rel='stylesheet prefetch' type='text/css'>
		<link href="fonts/awesome/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		<link rel='stylesheet' href='js/slider/css/anythingslider.css'>
		<script src="js/slider/js/jquery.anythingslider.js"></script>
		<script type="text/javascript" src="js/embedagram/jquery-embedagram.js"></script>
		<script type="text/javascript" src="js/embedagram/jquery-embedagram.pack.js"></script>
		<script src="js/custom.js"></script>

	</head>
	<body class="tabs">
		<header>
			<!--
			<div id="logo">
				<span>Think on the clock</span>
			</div>
			-->
			<nav>
				<div class="wrap">
					<ul>
						<li><a href="#main">home</a></li>
						<li><a href="#second">about</a></li>
						<li><a href="http://thinkontheclock.com/" target="_blank">blog</a></li>
						<div class="cf"></div>
					</ul>
				</div>
			</nav>
		</header>
		<div id="main" class="content">
			<div id="intro">
				<div class="wrap">
					<h1>Think on the Clock</h1>
					<p>
						I'm Matt. I build websites, and I love making the internet a better place.
					</p>
				</div>
			</div>
			<div id="home">
				<div>
					<section>
						<p>
							Lebowski ipsum well sir, it's this rug I have, really tied the room together. Dolor sit amet, consectetur adipiscing elit praesent ac magna justo pellentesque ac lectus. You think veer kidding und making mit de funny stuff? 
						</p>
						<p>
							Quis elit blandit fringilla a ut turpis praesent felis ligula, malesuada suscipit. Who'm I? I'm a fucking VETERAN! Malesuada non, ultrices non urna sed orci ipsum, placerat. My art has been commended as being strongly vaginal. Which bothers some men. The word itself makes some men uncomfortable. Vagina. Id condimentum rutrum, rhoncus ac lorem aliquam placerat posuere neque, at dignissim magna.
						</p>
					</section>

					<hr>
					
					<section>
						<ul id="slideshow"></ul>
						<i class="icon-instagram" onClick="window.open('http://instagram.com/thinkontheclock', '_blank');" title="Think on the Clock on Instagram"></i>
						<div class="cf"></div>
					</section>
				</div>
				
				<hr>

				<?php include ('twitter/tweets.php'); ?>

				<i class="icon-twitter" onClick="window.open('http://twitter.com/thinkontheclock', '_blank');" title="Think on the Clock on Twitter"></i>
			</div>
			<div id="three_column">
				<div class="wrap">
					<ul>
						<li>
							<i class="icon-cogs icon-large"></i>
							<h2>
								Front-end development
							</h2>
							<div class="excerpt">
								<div class="image"></div>
								<div class="text">
									<h3>Post title about front-end dev</h3>
									<p>
										Here's a very short excerpt
									</p>
								</div>
							</div>
						</li>
						<li>
							<i class="icon-camera icon-large"></i>
							<h2>
								Time Lapse Photography
							</h2>
							<div class="image"></div>
							<div class="text">
								<h3>Post title about time-lapse</h3>
								<p>
									Here's a very short excerpt
								</p>
							</div>
						</li>
						<li>
							<i class="icon-coffee icon-large"></i>
							<h2>
								Coffee Geekery
							</h2>
							<div class="excerpt">
								<div class="image"></div>
								<div class="text">
									<h3>Post title about front-end dev</h3>
									<p>
										Here's a very short excerpt that may contain an image, but we'll keep it brief so no one gets distracted or bored.
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="second" class="content">
			<div id="content">
				
				<h1>Hello World</h1>
				<p>
					Lebowski ipsum well sir, it's this rug I have, really tied the room together. Dolor sit amet, consectetur adipiscing elit praesent ac magna justo pellentesque ac lectus. You think veer kidding und making mit de funny stuff? Quis elit blandit fringilla a ut turpis praesent felis ligula, malesuada suscipit. Who'm I? I'm a fucking VETERAN! Malesuada non, ultrices non urna sed orci ipsum, placerat. My art has been commended as being strongly vaginal. Which bothers some men. The word itself makes some men uncomfortable. Vagina. Id condimentum rutrum, rhoncus ac lorem aliquam placerat posuere neque, at dignissim magna.
				</p>
				<p>
					Fuck you man! You don't like my fucking music, get your own fucking cab! Ullamcorper in aliquam sagittis massa ac tortor ultrices. Jesus, you mix a hell of a Caucasian, Jackie. Faucibus curabitur eu mi sapien, ut ultricies ipsum. Would it be possible for me to get my twenty grand in cash? I gotta check this with my accountant of course. Morbi eget risus nulla. Regrettably, it's true, standards have fallen in adult entertainment. It's video, Dude. Nullam vel nisi enim, vel auctor ante morbi.
				</p>
			</div>
			<aside id="sidebar">
				<?php //include ('twitter/tweets.php');?>
			</aside>
			<div class="cf"></div>
		</div>
		<footer>
		</footer>
	</body>
</html>