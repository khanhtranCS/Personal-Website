<?php
	function getHeader() {
?>
	<!DOCTYPE html>
<header>
	<title>My Personal Website for resume</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script type="text/javascript" src="interact.js"></script>
</header>

<body>
		<nav>
			<h1>
				My Personal Webpage
			</h1>
			<div class="btn-group">
				<a href="index.php" class="btn btn-primary">Home</a>
				<a href="contact.php" class="btn btn-primary">Contact</a>
				<a href="about.php" class="btn btn-primary">About</a>
				<a href="https://github.com/khanhtranCS" target="_blank" class="btn btn-primary">GitHub</a>
				<a target="_blank" href="https://www.linkedin.com/in/khanh-tran-86a420112" target="_blank" class="btn btn-primary">Linkedin</a>
				<a href="#" class="btn btn-primary">Personal Project</a>
				<a href="#" class="btn btn-primary">Tutorials</a>
			</div>
		</nav>
<?php
}
	function getFooter() {
?>
	<footer> Copyright 2016 Personal Page designed by <a href="mailto:ktran035@uw.edu">Khanh Duc Tran</a> </footer>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>