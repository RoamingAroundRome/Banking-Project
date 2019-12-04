<?php
session_start();
require_once "connection.php";

if (isset($_POST['Edit_Cust'])) {

    $query = "UPDATE Employee SET 
                fname = '" . $_POST['fname'] . "',
                lname = '" . $_POST['lname'] . "',
                Username ='" . $_POST['username'] . "',
                Password= '" . $_POST['password'] . "',
                email = '" . $_POST['email'] . "',
                date_expire = '" . $_POST['expiry'] . "'
                 WHERE id = '" . $_SESSION['id'] . "' ";

    if (mysqli_query($link, $query)) {
        header('Location: view_teller.php');
    } else {
        echo 'Eroor';
    }
}
