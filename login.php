<?php
session_start();
require_once("connection.php");

if (isset($_POST['Login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) 
    {
        header('location:index.php?empty=Please all the fields !');
    } 
    else 
    {   
        $query_0 = "SELECT * FROM Employee WHERE username = '" . $_POST['username'] . "' && password = '" . $_POST['password'] . "'";
        $result_0 = mysqli_query($link, $query_0);
          
        $query_1 = "SELECT * FROM Customer WHERE username = '" . $_POST['username'] . "' && password = '" . $_POST['password'] . "'";
        $result_1 = mysqli_query($link, $query_1);

                 
            if ($data = mysqli_fetch_array($result_0)) 
            {
                if ($_SESSION['role'] = $data['role'] == 'Teller') 
                {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['fname'] = $data['fname'];
                    $_SESSION['lname'] = $data['lname'];
                    $_SESSION['role'] = $data['role'];
                    header("location:U_teller.php");
                } 
                elseif ($_SESSION['role'] = $data['role'] == 'Manager') 
                {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['fname'] = $data['fname'];
                    $_SESSION['lname'] = $data['lname'];
                    $_SESSION['role'] = $data['role'];
                    header("location:U_admin.php");            
                
                }
            } 
                
            elseif ($data = mysqli_fetch_array($result_1)) 
            {
                $_SESSION['id'] = $data['id'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['lname'] = $data['lname'];
                $_SESSION['balance'] = $data['balance'];
                $_SESSION['account'] = $data['account'];
                $_SESSION['date_expire'] = $data['date_expire'];
                header("location:U_user.php");
                
            } 
           
    }
}
?>