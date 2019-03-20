<?php
    $contents = file_get_contents('phonebook2.csv');

    if ($_GET['edit']) {
        require('view.php');
        exit;
    }

    $entry = [];

    //ITO YUNG SINUSUBUKAN KO KAHAPON NA AYAW GUMANA xD
    //1) Inorganize yung array (string to array)
    foreach(explode("\n", $contents) as $content) {
        [$firstName, $lastName, $gender, $birthdate, $id] = explode(',', $content);

        $entry[] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'gender' => $gender,
            'birthdate' => $birthdate,
            'id' => $id
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th width="50"></th>
                <th width="100">FirstName</th>
                <th width="100">Last Name</th>
                <th>Gender</th>
                <th>Birthdate</th>
            </tr>
        </thead>

        <?php foreach($entry as $data): ?>
        <tbody>
            <tr>
                <td><a href="?edit=<?php echo $data['id'] ?>"><?php echo $data['id']; ?></a></td> <!--display clickable id -->
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['birthdate']; ?></td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
<a href="index.php">Add</a>
</body>
</html>