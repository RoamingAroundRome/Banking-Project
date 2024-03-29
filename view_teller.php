<?php
    session_start();
    include"connection.php";
    $query = "SELECT * FROM Teller_list";
    $result = mysqli_query($link,$query);

?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

    <head>
        <title>Teller</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="U_admin.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            View
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view_customer.php">View Customers</a>
                            <div class="dropdown-divider"> </div>
                            <a class="dropdown-item" href="view_teller.php">View Teller</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class=" btn btn-danger my-2 my-sm-0" name="btnLogout" href="logout.php?logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container justify-content-center bg-transparent table-responsive">
            <div class="row bg-secondary">
                <table class="table bg-secondary table-borderless">
                    <tr class="bg-transparent">
                        <th class="text-light text-" style="font-size:20px"> All Teller</th>
                        <th> </th>
                        <th> </th>
                        <th> <a name="btnLogout" class="btn btn-primary" href="T_register.php" role="button">
                                Add New Teller</a>
                        </th>
                    </tr>
                </table>
            </div>

            <div class="row">
                <table class="table bg-white table-bordered ">
                    <thead>
                        <tr>
                            <th>Branch Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>

                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['branch_id'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td style="align-center">
                            <a class="btn btn-primary" role="button" href="T_edit.php?id=<?php echo $fname; ?>">Edit
                            </a>
                            <a class="btn btn-danger" role="button" href="T_delete.php?id=<?php echo $fname; ?>"> Delete
                            </a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </table>
            </div>



            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
    </body>

</html>
