<?php
//cookies are stored on the user computer unlike sessions which is stored on the server. Sessions are more preferable as compared to cookies but cookies has it uses as well


if (isset($_POST['submit'])) {
    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);
   
   
   
   
   
   
    session_start();
    $_SESSION['name'] = $_POST['name'];
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions & Cookies</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit" value="Submit">

    </form>

</body>

</html>