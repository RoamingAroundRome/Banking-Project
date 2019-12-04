<?php
    require_once "connection.php";
    include "login.php";
    
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h1 class="text-center text-dark p-3"> Welcome to Banco de Cortes</h1>
                <form action="login.php" method="POST" class=" p-3">
                    <div class="form-group">
                        <label> Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" minlength-8>

                    </div>

                    <div class="form-group">
                        <input type="submit" name="Login" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>