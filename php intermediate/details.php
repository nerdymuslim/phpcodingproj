<?php
//check GET request id paramater
include 'config/db_connect.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    //make sql
    $sql = "SELECT * FROM pizzas where id = $id";
    //get the query result
    $result = mysqli_query($conn, $sql);
    //fetch only one result with mysqli_fetch_assoc and converts to associative array
    $pizza = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

    //
}
include 'templates/header.php';
?>

<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created by:<?php echo htmlspecialchars($pizza['email']); ?></p>
        <p> <?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    <?php else : ?>
        <h5>No such pizza In our database</h5>
    <?php endif; ?>
</div>
<?php
include 'templates/footer.php';
?>