<?php 
	include 'scripts/subscribe.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0">
	<title>John Wangaruro Kimani | Coming Soonest!</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">John W. kimani</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">About Me</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<main>
		<div id="intro">
			<h2>We Are Coming Soon.</h2>
			<p>Subscribe to Get Notified!</p>
		</div>
	</main>

	<div class="form-top">
		<h4>Enter Your Email.</h4>
	</div>
	<form action="index.php" method="POST" class="subscribers" id="subscribers">
		<div class="form-group">
			<label for="email">Your Email:</label>
			<input type="email" class="form-control" placeholder="someone@example.com" name="barua" required>
		</div>
		<button class="btn btn-success" name="sub">Subscribe</button>
	</form>

	<footer id="mwisho">
		<div class="content">
			<p>Wangaruro &copy; <script>let date = new Date; let cyr = date.getFullYear(); document.write(cyr);</script></p>
		</div>
	</footer>
	<!--/javascript files-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>