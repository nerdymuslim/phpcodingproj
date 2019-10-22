<?php
//MySQLi or PDO (for object oriented format)
$conn = mysqli_connect('localhost', 'ekiti', 'test893', 'naija_pizza');

//check for connection
if (!$conn) {
    echo "Connection Error: " . mysqli_connect_error();
}
// else {
// echo "Database connection succesful";
// }
