<?php
include "./database.php";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $delete = "DELETE FROM address WHERE id = $id";
    mysqli_query($db_connection, $delete);
    header("Location: " . $_SERVER['PHP_SELF']);
}

$sql = 'SELECT * FROM address';
$result = mysqli_query($db_connection, $sql);
$addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Entries</title>
</head>

<body>
    <h1>All Addresses</h1>
    <?php if (empty($addresses)) : ?>
        <p>There are no addresses</p>
    <?php endif; ?>
    <?php foreach ($addresses as $item) : ?>
        <div>
            <fieldset>
                <legend><?php echo $item['f_name'] . ' ' . $item['l_name'] ?></legend>
                <p>Email: <?php echo $item['email'] ?></p>
                <p>Gender: <?php echo $item['gender'] ?></p>
                <p>Address: <?php echo $item['s_address'] . ', ' . $item['postle_code'] . ', ' . $item['country'] ?></p>
                <form method="post">
                    <input type="hidden" name="delete" value="<?php echo $item['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
                <form method="post" action="./update.php">
                    <input type="hidden" name="update" value="<?php echo $item['id'] ?>">
                    <button type="submit">Update</button>
                </form>
            </fieldset>
        </div>
    <?php endforeach; ?>
</body>

</html>