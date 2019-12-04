<?php
    session_start();
    include"connection.php";
    if(isset($_GET['id']))
    {
        $fname = $_GET['id'];
        $query = "DELETE FROM Employee WHERE fname = '$fname'";
    
        if (mysqli_query($link,$query))  
        {
            
                 header('Location: view_teller.php');
                
        }
        
    }
    
    
    
    
?>
