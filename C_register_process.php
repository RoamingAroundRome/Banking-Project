<?php
session_start();
require_once "connection.php";

if (isset($_POST["Reg_Cust"])) {

    $query = "INSERT INTO Customer 
                (fname, lname, email,username,password,account,balance,date_expire,branch_id) 
                VALUES ('" . $_POST['fname'] . "', 
                        '" . $_POST['lname'] . "', 
                        '" . $_POST['email'] . "', 
                        '" . $_POST['username']."', 
                        '" . $_POST['password'] . "',
                        '" . $_POST['account'] . "' , 
                        '" . $_POST['balance'] . "',
                        '" . $_POST['expiry'] . "',
                        '" . $_POST['branch_id'] . "'
                        );";

    if (mysqli_query($link, $query)) {
        if ($_SESSION['role'] != "Manager") {
            Header('Location: view_customer_teller.php');
        } else {
            Header('Location: view_customer.php');
        }
    } else {
        echo 'Error';
    }
}
