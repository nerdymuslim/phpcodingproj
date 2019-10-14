<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php require_once "process.php" ?>
    <?php
    if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['msg_type']; ?>">
            <?php echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>

        </div>
    <?php endif ?>
    <?php
    $conn = new mysqli("localhost", "root", "", "crud") or die(mysqli_error($conn));
    $result = $conn->query("SELECT * FROM `account`") or die($conn->error);
    # pre_r($result->fetch_assoc());
    function pre_r($array)
    {
        echo '<pre>';
        echo print_r($array);
        echo '</pre>';
    }
    ?>

    <div class="container mt-2 mb-4 p-2 shadow bg-white">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-row justify-content-center">
                <div class="col-auto">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="username" required>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Enter your password" required>

                </div>
                <div class="col-auto">
                    <?php
                    if ($update == true) : ?>
                        <button type="submit" name="update" class="btn btn-info">Update</button>
                    <?php else : ?>
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                    <?php endif ?>
                </div>
            </div>
        </form>

    </div>
    <div class="container">

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) :
                        ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">
                                    Edit
                                </a>
                                <a href="process.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src=" js/bootstrap.js"> </script>
</body>

</html>