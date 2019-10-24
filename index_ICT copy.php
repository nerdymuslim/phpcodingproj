<?php

include "config/db_connect.php";
//write query for all naija_pizzas

$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';
//make query and get result
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array. They are not automatically in array form
//$result isnt in the format we can use . 

//MYsql_assoc makes it an associative array . Fetch all the result into an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
// after awhile we wont be needed this anymore so we should free this from memory. not compulsory .
//print_r($pizzas);
//free result from memory
mysqli_free_result($result);


//close the connection from memory as well .
mysqli_close($conn);
//print_r($pizzas); Here you will see it results an array that can be cycled through for use

//explode(',', $pizzas[0]['ingredients']);
include "templates/header.php";
?>

<h4 class="center green-text">Pizzas from Naija Pizzas!!!</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) { ?>
            <!-- we use materilize col class which is the way we use grid and we specify the size .there is 12 columns in total in materialize grid system-->
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>

                        <!-- //echo htmlspecialchars($pizza['ingredients']); -->
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                                <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php endforeach; //endforeach better  
                                ?>
                        </ul>



                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="#">More info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>
<?php
include "templates/footer.php";
