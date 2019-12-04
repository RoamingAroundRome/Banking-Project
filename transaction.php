<?php
    
    session_start();
    require_once "connection.php";
    include "transprocess.php";
    if(isset($_GET['forne'])){
        $fname = $_GET['forne'];
        $query = "SELECT * FROM Customer WHERE fname = '$fname'";
    
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_assoc($result);
    
    }

    
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

    <head>
        <title>Transaction</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 bg-light mt-5 px-0">
                    <h3 class="text-center text-dark p-3"> Transaction</h3>
                    <form action="transprocess.php" method="POST" class="p-4">
                        <div class="form-group">
                            <label for="">USER:</label>
                            <?php echo $row['username'];?>
                        </div>
                        <div class="form-group">
                            <label for="">Current Balance</label>
                            <?php echo $row['balance'];?>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Transaction type</label>
                            <select name="choice" class="form-control" id="exampleFormControlSelect1">
                                <option value="withdraw">Withdraw</option>
                                <option value="deposit">Deposit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="text" name="amount" class="form-control" placeholder="Enter Amount"
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted"> ex: 500.00</small>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                            <input type="submit" name="trans" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
