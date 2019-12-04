<?php
    session_start();
    include"connection.php";
    if(isset($_GET['id']))
    {
        $fname = $_GET['id'];
        $query = "DELETE FROM Customer WHERE fname = '$fname'";
    
        if (mysqli_query($link,$query))  
        {
            if (isset($_SESSION["role"])) 
            {
                if ($_SESSION["role"] == "Teller") 
                {
                    header('Location: view_customer _teller.php');
                } elseif ($_SESSION["role"] == "Manager") 
                {
                    header('Location: view_customer.php');
                }
            }
        }
    }
    
    
    
    
?>
