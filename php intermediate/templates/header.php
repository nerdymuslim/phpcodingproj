<?php
session_start();
$name = $_SESSION['name'];
if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']); // how to delete session variable or use 
    //session_unset();
}
//null coalescence  operator ??
//if the first valueexist it picks the first one or else it uses the fall back plan which is the right side
$name = $_SESSION['name'] ?? 'Guest';
//get cookies
$gender = $_COOKIE['gender'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Naija Pizza</title>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Naija Pizza</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="green-text"> Hello <?php echo htmlspecialchars($name);
                                                ?></li>
                <li>
                <li class="green-text">( <?php echo htmlspecialchars($gender);  ?>)</li>
                <li>
                    <a href="add.php" class="btn brand z-depth-0">Add Pizza</a>
                </li>
            </ul>
        </div>
    </nav>