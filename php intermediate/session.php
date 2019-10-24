<?php
//imagine you are on a page and you request another page and you want your variable carried over to the next page .we can use sessions to store data that can now be assesed accross pages. please remember that sessions are stored on the server unlike cookies which is store on your local computer (the client).sessions will last so far the user hasnt close that webpage or browser depending on which case comes first.
if (isset($_POST['submit'])) {
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
    <title>Sessions</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">

    </form>

</body>

</html>