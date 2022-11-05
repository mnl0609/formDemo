<!DOCTYPE html>
<html>
<head>
	<title>LEARNERS INFORMATION SYSTEM</title>
</head>
<body>


<form action="#" method="post">
		<h1>ID Information Update</h1>
		Input Student ID:<input type="text" name="studentid" size="11"><br>
		<h3>Input new information:</h3>
		<h2>Personals</h2>
		First Name:<input type="text" name="fname" size="20">
		<br>
		Last Name:<input type="text" name="lname" size="20">
		<br>
		Course: <input type="text" name="course" size="20"><br>
		<br>
		<input type="radio" name="stat" value="Freshman">Freshman
		<input type="radio" name="stat" value="Sophomore">Sophomore
		<input type="radio" name="stat" value="Senior">Senior<br>
		<h2>Address</h2>
		<h4>Province:</h4>
		<select name="province">
			<option selected="selected">-select-</option>
			<option>Abra</option>
			<option>Benguet</option>
			<option>Ifugao</option>
			<option>Kalinga</option>
		</select>
		<h4>Municipality/City:</h4>
		<select name="municipality">
			<option selected="selected">-select-</option>
			<option>Baguio City</option>
			<option>Itogon</option>
			<option>La Trinidad</option>
			<option>Sablan</option>
		</select><br>
		Birthdate: <input type="text" name="birthdate"><br>

		<h2>Emergency Contact</h2>
		First Name:<input type="text" name="personfirstname" size="20"><br>
		Last Name:<input type="text" name="personlastname" size="20"><br>
		Mobile Number:<input type="text" name="personco" size="20"><br>
		<input type="radio" name="connect" value="Parent">Parent
		<input type="radio" name="connect" value="Guardian">Guardian<br>

		<input type="submit" name="submit" value="Input"><br>
	</form>

<?php

	if(isset($_POST['submit'])){
	}

	$studentid = $_POST['studentid'];
	$firstname = $_POST['fname'];
	$lastname =$_POST['lname'];
	$course =$_POST['course'];
	$yearlevel =$_POST['stat'];
	$province =$_POST['province'];
	$municipality =$_POST['municipality'];
	$birth =$_POST['birthdate'];
	$personfirstname =$_POST['personfirstname'];
	$personlastname =$_POST['personlastname'];
	$mobile =$_POST['personco'];
	$relationship =$_POST['connect'];

	$file = fopen("Infos.txt", "w+") or die("file not open");

	$s = "Student ID:".$studentid."\nName: ".$firstname." ".$lastname.", ".$course."\n".$yearlevel."\n".$municipality.", ".$province."\n".$birth."\nEmergency Contact\n".$relationship.":".$personfirstname." ".$personlastname."\nMobile Number: ".$mobile;
	fputs($file,$s) or die("Data not write");

	fclose($file);

?>

</body>
</html>