<?php
include './database.php';
$fname = $lname = $email = $gender = $s_address = $country = $postle = '';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$s_address = $_POST['s_address'];
$country = $_POST['country'];
$postle = $_POST['postle'];

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($s_address) && !empty($country) && !empty($postle)) {

    $add_to_db = "INSERT INTO `address` (`id`, `f_name`, `l_name`, `email`, `gender`, `s_address`, `country`, `postle_code`) VALUES (NULL, '$fname', '$lname', '$email', '$gender', '$s_address', '$country', '$postle')";
    if ($db_connection->query($add_to_db) === TRUE) {

        header('Location: showcase.php');
    } else {
        echo "Error: " . $add_to_db . "<br>" . $db_connection->error;
    }


    $db_connection->close();
}
