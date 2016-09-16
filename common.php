<?php
	function getHeader() {
?>
	<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="resume.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<div id="link">
	  <span><a href="index.php">home</a></span> 
      <span><a href="about.php">about</a></span>
      <span><a href="resume.php">r&#233;sum&#233;</a></span>
      <span><a href="project.php">projects</a></span>
      <span><a href="contact.php">contact</a></span>
      <span><a href="else.php">...</a>
    </div>
<?php
}
	function getFooter() {
?>
	<hr/>
	<footer><span id="copyright">&copy;2015-2016 <a href="mailto:ktran035@uw.edu">Khanh Duc Tran</a>. All rights reserved.</span> </footer>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>