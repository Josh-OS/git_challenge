<!DOCTYPE html>
<html>
<head>
	<title>Form to array</title>
</head>
<body>

<h2>Insert info</h2>

<form action="" method="POST">
	First Name: <input type="text" name="fname"><br>
	Last Name:	&nbsp<input type="text" name="lname"><br>
	Gender:	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender"><br>
	Age: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="age">
	<br><br>
	<input type="submit">

	<br><br><br><br>
	<h3>You have entered</h3>


	<?php 

	//Array declaration
	$phonebook = [
		[
        	'first_name' => '',
        	'last_name' => '',        
        	'gen_der' => '',
        	'a_ge' => '',
           
			],
   
	];


	//Input to arrays
	$phonebook[0]['first_name'] = $_POST['fname'];
	$phonebook[0]['last_name'] = $_POST['lname'];
	$phonebook[0]['gen_der'] = $_POST['gender'];
	$phonebook[0]['a_ge'] = $_POST['age'];



	// To CSV
	$fp = fopen('file.csv', 'w');

	foreach ($phonebook as $info) {
		fputcsv($fp, $info);
	}
	fclose($fp);




	//Visual output
	echo "Firstname:&nbsp&nbsp&nbsp" . $phonebook[0]['first_name'] . "<br>";
	echo "Last name:&nbsp&nbsp" . $phonebook[0]['last_name'] . "<br>";
	echo "Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $phonebook[0]['gen_der'] . "<br>";
	echo "Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $phonebook[0]['a_ge'] . "<br>";



	?>

</body>
</html>
