
<?php

$contents = file_get_contents('phonebook2.csv');
$entry = [];
$display = null;

foreach(explode("\n", $contents) as $content) {
    [$firstName, $lastName, $gender, $birthdate, $id] = explode(',', $content);

    if ($id == $_GET['edit']) {

        $display = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'gender' => $gender,
            'birthdate' => $birthdate,
            'id' => $id
        ];
    }
}

?>
<h1>Hello <?php echo $display['first_name'] ?></h1>
<p>Your last name is <?php echo $display['last_name'] ?></p>
<p>Your birthdate is <?php echo $display['birthdate'] ?></p>
<p>You are born as <?php echo $display['gender'] ?></p>


<?php require('edit.php'); ?>
