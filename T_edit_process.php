<?php
   
    include"connection.php";
    
    if(isset($_POST['Edit_Cust']))
    {
        
        $query = "UPDATE Employee SET 
                fname = '".$_POST['fname']."',
                lname = '".$_POST['lname']."',
                Username ='".$_POST['username']."',
                Password= '".$_POST['password']."',
                email = '".$_POST['email']."',
                expiry_date = '".$_POST['expiry']."'
                 WHERE id = '".$_POST['id']."' ";
    
        if (mysqli_query($link,$query))  
        {
            if($_SESSION['role'] != "Manager")
            {
                header('Location: view_customer_teller.php');
            }
            else{
                header('Location: view_customer.php');
            }
        }
    
        else
        {
            echo 'Eroor';
        }
    }
      
?>
