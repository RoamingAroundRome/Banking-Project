<?php
    session_start();
    require_once "connection.php";
    if(isset($_SESSION["Role"]))
    {
        if($_SESSION["Role"] == "Teller")
        {
            header('Location: U_teller.php');
        }
        elseif($_SESSION["Role"] == "Manager")
        {
            header('Location: U_admin.php');
        }
        else
        {
            $id = $_SESSION["id"];
        }

    }
    else
    {
        header('Location: index.php');
    } 
        $query = "SELECT * FROM Customer WHERE id = $id ";
        $result = mysqli_query($link,$query);
        $result_cust = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
    <meta charset="UTF-8">

    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body class="bg-secondary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.php">BDC
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="U_user.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="transaction.php?trans=<?php echo $result_cust['fname']; ?>">Transaction</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class=" btn btn-danger my-2 my-sm-0" name="btnLogout" href="logout.php?logout">Logout</a>
                    </li>
                </ul>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 bg-light mt-5 px-0">
                    <h3 class="text-center text-dark p-3"> Welcome <?php echo $result_cust['fname']; ?></h3>
                    <h4 class="text-center"> Balance:<?php echo $result_cust['balance']; ?></h4>
                </div>
            </div>

        </div>
    </body>

</html>
