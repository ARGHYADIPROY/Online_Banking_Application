<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
$result = $conn->query("select * from users where email='$email'");
$data = $result->fetch_assoc();
$current_page = "sendmoney";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERA BANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<style>
    #sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #f1f1f1;
        padding-top: 20px;
        overflow-y: auto;
    }

    #sidebar a {
        padding: 8px 16px;
        text-decoration: none;
        font-size: 20px;
        color: black;
        display: block;
    }

    #sidebar a.active {
        background-color: #8227f2;
        color: white;
    }

    #sidebar a:hover:not(.active) {
        background-color: lightgrey;
        color: white;
    }

    
    #content {
        margin-left: 250px;
        padding: 15px;
    }
</style>
<body>
<body style="background: url(images/photo-1608501078713-8e445a709b39.jpg);background-size: 100%; background-repeat:no-repeat; ">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(168, 94, 236);">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="flex-direction: column;align-items:flex-start">
                    <li class="nav-item">
                        <p style="font-size: 20px;margin: 0 0;color: black;text-transform:capitalize"><?php echo $data['name']; ?>(Account No: 
                    <?php echo $data['accountno']; ?>)</p>
                    </li></ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: blueviolet;">
        <div class="container-fluid">
            <img src="images/pngegg.png" style="height: 100%; width: 10vh; margin-right: 20px;">
            <a class="navbar-brand" href="" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight: bolder; color: white; text-shadow: 4px 4px black">OPERA BANK</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-outline-light mx-1" style="margin-top: 5px;"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar Navigation -->
<div id="sidebar" style="margin-top: 132px;">
    <a href="userdetails1.php" <?php if ($current_page === "dashboard") echo 'class="active"'; ?>>Dashboard</a>
    <a href="transactionhistory.php" <?php if ($current_page === "transactionhistory") echo 'class="active"'; ?>>Transaction History</a>
    <a href="sendmoney.php" <?php if ($current_page === "sendmoney") echo 'class="active"'; ?>>Send Money</a>
    <a href="helpcard.php" <?php if ($current_page === "helpcard") echo 'class="active"'; ?>>Customer Support</a>
    <a href="aboutus.php" <?php if ($current_page === "aboutus") echo 'class="active"'; ?>>About Us</a>
</div>

  <div class="container" style="margin-top: 80px;font-size: larger;margin-left:210px">
    <div class="card col-md-6 mx-auto">
      <div class="card-header text-center" style="background-color: blueviolet;color:white;font-size:x-large;font-weight:bold">
        Transfer Money
      </div>
      <div class="card-body" style="background-color: #b77bc9;">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="accno">Account Number:</label>
                <input type="number" name="accno" id="accno" class="form-control" placeholder="Account Number" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" placeholder="Amount" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="send" style="margin-left: 180px ;margin-top: 10px;">SEND</button>
            <button type="reset" class="btn btn-secondary" style="margin-left: 20px ;margin-top: 10px;">RESET</button>
        </form>
        <?php
            if (isset($_POST['send'])) {
                $name = $_POST['name'];
                $accno = $_POST['accno'];
                $amt = $_POST['amount'];

                $result = $conn->query("select * from users where name='$name' AND accountno='$accno'");
                if ($result->num_rows>0) {
                    if ($amt <= $data['balance']) {
                        $cred = "CREDIT";
                        $deb = "DEBIT";

                        $conn->query("UPDATE users SET balance = balance + $amt WHERE accountno = '$accno'");
                        $stmt = $conn->query("INSERT INTO history (accountno, name, amount, type) VALUES ('$accno', '$name', $amt, '$cred')");

                        $conn->query("UPDATE users SET balance = balance - $amt WHERE accountno = '$data[accountno]'");
                        $stmt = $conn->query("INSERT INTO history (accountno, name, amount, type) VALUES ('$data[accountno]', '$name', $amt, '$deb')");

                        echo '<script>alert("Transaction Completed!")</script>';
                    } else {
                        echo '<script>alert("Insufficient Balance")</script>';
                    }
                } else {
                    echo '<script>alert("Check Name and AccountNo")</script>';
                }
            }
            ?>

    </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>