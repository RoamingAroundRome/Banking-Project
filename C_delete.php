<?php
    session_start();
    include"connection.php";
    if(isset($_GET['id']))
    {
        $fname = $_GET['id'];
        $query = "DELETE FROM Customer WHERE fname = '$fname'";
    
        if (mysqli_query($link,$query))  
        {
            if (isset($_SESSION["Role"])) 
            {
                if ($_SESSION["Role"] == "Teller") 
                {
                    header('Location: view_customer _teller.php');
                } elseif ($_SESSION["Role"] == "Manager") 
                {
                    header('Location: view_customer.php');
                }
            }
        }
    }
    
    
    
    
?>
