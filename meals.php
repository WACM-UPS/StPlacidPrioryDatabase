<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dates.css">
	<title> Meal Info Page </title>
	<!--include css-->
</head>
<body>
<section id='banner'></section>
<section id='form'>
	<h2>Choose Meals</h2>
	<form id='meals'>
		Date:
		<input type='date' name='date'>
		<br> <br>
		Which meals do you want for this day?
		<br> <br>
		<input type='checkbox' name='meals' id='none' value='none'><label for='none'></label> None
		<input type='checkbox' name='meals' id='lunch' value='lunch'><label for='lunch'></label> Lunch
		<input type='checkbox' name='meals' id='dinner' value='dinner'><label for='dinner'></label> Dinner

		<input type='checkbox' name='meals' value='none'> None
		<input type='checkbox' name='meals' value='lunch'> Lunch
		<input type='checkbox' name='meals' value='dinner>'> Dinner

		<?php
		echo "Hello world!";
		?>

		<input type='submit'>
	</form>
</section>
</body>
</html>
