<?php
require_once "connection.php";
include "T_register_process.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <title>New Teller</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-dark p-3"> Register New Teller</h3>
                <form action="T_register_process.php" method="POST" class="p-4">
                    <div class="form-group">
                        <label for=""> First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter Firstname" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for=""> Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter Lastname" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for=""> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for=""> Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <label for="">Branch_ID</label>
                        <input type="number" name="branch_id" class="form-control" placeholder="Enter Branch_Id" aria-describedby="helpId">
                    
                    <div class="form-group">
                        <input type="submit" name="Reg_Teller" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>