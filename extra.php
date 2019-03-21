<?php
//User defined functions

function csv2ray($contents) {
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
}

 ?>
