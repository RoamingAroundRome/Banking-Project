<?php

session_start();

if (isset($_SESSION["role"])) {
    if ($_SESSION["role"] == "Manager") {
        header('Location: U_admin.php');
    } elseif ($_SESSION["role"] == "Cust") {
        header('Location: U_user.php');
    }
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <title>Teller</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="U_teller">BDC
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="U_teller">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a class="nav-link" href=" view_customer_teller.php">View Customers</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" btn btn-danger my-2 my-sm-0" name="btnLogout" href="logout.php?logout">Logout</a>
                    </li>
                </ul>
        </nav>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-5 bg-light mt-5 px-0">
                    <h1 class="text-center text-dark p-2"> Welcome <?php echo $_SESSION['role'].' '.$_SESSION['fname'].
            '<br>';?></h1>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-5 bg-light mt-0 px-1">
                    <h5 class="text-center"> Please Select An Action:</h5>
                    <div class="text-center p-3">
                        <a class=" btn btn-primary btn-block p-3" href=" view_customer_teller.php">View
                            Customers</a>
                        <div class="dropdown-divider"></div>
                        <a class=" btn btn-danger btn-block p-3" name="btnLogout" href="logout.php?logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

</html>
