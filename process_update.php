<?php
include "./database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $s_address = $_POST['s_address'];
    $postle_code = $_POST['postle_code'];
    $country = $_POST['country'];

    $update = "UPDATE address SET f_name = '$f_name', l_name = '$l_name', email = '$email', gender = '$gender', s_address = '$s_address', postle_code = '$postle_code', country = '$country' WHERE id = $id";
    mysqli_query($db_connection, $update);

    header("Location: ./showcase.php"); 
}
