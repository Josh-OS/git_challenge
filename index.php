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

    	[
        	'first_name' => '',
        	'last_name' => '',
        	'gen_der' => '',
        	'a_ge' => '',
        
        
    	]
   
	];


	//Input to arrays
	$phonebook['first_name'] = $_POST['fname'];
	$phonebook['last_name'] = $_POST['lname'];
	$phonebook['gen_der'] = $_POST['gender'];
	$phonebook['a_ge'] = $_POST['age'];


	

	//Visual output
	echo "Firstname:&nbsp&nbsp&nbsp" . $phonebook['first_name'] . "<br>";
	echo "Last name:&nbsp&nbsp" . $phonebook['last_name'] . "<br>";
	echo "Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $phonebook['gen_der'] . "<br>";
	echo "Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . $phonebook['a_ge'] . "<br>";


 	

 	// echo $phonebook['first_name'] . " is the value";

	?>

</body>
</html>