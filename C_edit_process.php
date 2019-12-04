<?php
session_start();
require_once "connection.php";

if (isset($_POST["Edit_Cust"])) {

    $query = "UPDATE Customer SET 
                fname = '" . $_POST['fname'] . "',
                lname = '" . $_POST['lname'] . "',
                username ='" . $_POST['username'] . "',
                password= '" . $_POST['password'] . "',
                email = '" . $_POST['email'] . "',
                date_expire = '" . $_POST['expiry'] . "'
                 WHERE account = '" . $_SESSION['account'] . "' ";

    if (mysqli_query($link, $query)) {
        if ($_SESSION['role'] != "Manager") {
            header('Location: view_customer_teller.php');
        } else {
            header('Location: view_customer.php');
        }
    } else {
        echo $_SESSION['role'];
    }
}
