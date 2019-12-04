<?php
    
    require_once "connection.php";
    
    if(isset($_POST["Reg_Cust"]))
    { 
       
        $query = "INSERT INTO Customer 
                (fname, lname, Username, Password, email, balance, expiry_date, branch_id) 
                VALUES ('".$_POST['fname']."', 
                        '".$_POST['lname']."', 
                        '".$_POST['username']."', 
                        '".$_POST['password']."', 
                        '".$_POST['email']."', 
                        '".$_POST['balance']."',
                        '".$_POST['expiry']."',
                        '".$_POST['branch_id']."'
                        )"
        ;
        if(mysqli_query($link, $query)){
            $message = 'Record Successful';
            echo $message; 
        } 
                
    }
?>
