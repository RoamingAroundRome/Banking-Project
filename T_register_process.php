<?php
    session_start();
    require_once "connection.php";
    
    if(isset($_POST["Reg_Teller"]))
    {
        
        $query = "INSERT INTO Employee 
                (fname, lname, Username, Password, email, Role, branch_id) 
                VALUES ('".$_POST['fname']."', 
                        '".$_POST['lname']."', 
                        '".$_POST['username']."', 
                        '".$_POST['password']."', 
                        '".$_POST['email']."',
                        'Teller', 
                        '".$_POST['branch_id']."'
                        )"
        ;

        if(mysqli_query($link, $query)){
            $message = 'Record Successful <a href="/Bank_App/">Go back</a>';
            echo $message; 
        } 
                
    }
?>
