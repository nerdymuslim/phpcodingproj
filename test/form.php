<?php
$conn = mysqli_connect('localhost', 'root', 'test893', 'test');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP FORM</title>
</head>

<body>
    <form action="form.php" method="POST">
        <label for="name">Full Name goes into table 1</label>
        <br>
        <input type="text" name="fullname">
        <br>
        <label for="name2">Full Name goes into table 2</label>
        <br>
        <input type="text" name="fullname2">
        <button type="submit">Submit</button>
    </form>

</body>

</html>