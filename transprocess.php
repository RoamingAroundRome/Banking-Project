<?php
    require_once "connection.php";
    
    if(isset($_POST["trans"]))
    {
        $t_selected = $_POST['choice'];
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        if($t_selected == 'withdraw')
        {
            $query = "UPDATE Customer SET balance = balance - $amount where id = '$id'";
            $result = mysqli_query($link,$query);
            header('Location: logout.php?logout');
        }
        else
        {
            $query = "UPDATE Customer SET balance = balance + $amount where id = '$id'";
            $result = mysqli_query($link,$query);
            header('Location: logout.php?logout');
        }
        
    }
   
 ?>