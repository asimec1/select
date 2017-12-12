<?php 
print '
<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>SELECT</title>
		<style>
			body {
				width: 50%;
				margin: 2em auto;
			}
			h1 {
				font-size: 1.5em;
			}
		</style>
	</head>
<body>
	<h1>Zadatak (Select countries from database):</h1>
	<p>Napravite zadatak gdje ćete odabrati kroz padajući izbornik sve države.</p>
	<form action="" id="registration_form" name="registration_form" method="POST">
		<label for="country">Country:</label>
		<select name="country" id="country" class="form-control">
			<option value="">molimo odaberite</option>';
			# Connect to MySQL database
			$MySQL = mysqli_connect("localhost","root","","webprog") or die('Error connecting to MySQL server.');
			
			#Select all countries from database webprog, table countries
			$query  = "SELECT * FROM countries";
			$result = @mysqli_query($MySQL, $query);
			while($row = @mysqli_fetch_array($result)) {
				print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
			}
		print '
		</select>
		<hr>
		<input type="submit" value="Submit"  class="btn btn-default">
	</form>
</body>
</html>';
?>
