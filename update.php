<?php
include "./database.php";

if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $select = "SELECT * FROM address WHERE id = $id";
    $result = mysqli_query($db_connection, $select);
    $address = mysqli_fetch_assoc($result);

    if ($address) {
?>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Address</title>
        </head>

        <body>
            <h1>Update Address</h1>
            <form method="post" action="./process_update.php">
                <input type="hidden" name="id" value="<?php echo $address['id'] ?>">
                <label for="f_name">First Name:</label>
                <input type="text" name="f_name" value="<?php echo $address['f_name'] ?>">
                <br>
                <label for="l_name">Last Name:</label>
                <input type="text" name="l_name" value="<?php echo $address['l_name'] ?>">
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $address['email'] ?>">
                <br>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>

                <input type="radio" id="other" name="gender" value="other">
                <label for="other">other</label>
                <br><br>
                <label for="s_address">Street Address:</label>
                <input type="text" name="s_address" value="<?php echo $address['s_address'] ?>">
                <br>
                <label for="postle_code">Postal Code:</label>
                <input type="text" name="postle_code" value="<?php echo $address['postle_code'] ?>">
                <br>
                <label for="country">Country:</label>
                <input type="text" name="country" value="<?php echo $address['country'] ?>"><br>
                <button type="submit">Update Address</button>
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Address not found.";
    }
}
?>