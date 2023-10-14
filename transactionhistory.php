<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
$result = $conn->query("select * from users where email='$email'");
$data1 = $result->fetch_assoc();
$result1 = $conn->query("select * from history where accountno = '$data1[accountno]' order by id desc");
$current_page = "transactionhistory";


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
    table, th, td, tr {
        border: 1px solid black;
    }
    .horizontal-navbar {
        position: fixed; /* Fixed position */
        top: 0;
        width: 100%;
        z-index: 1;
    }
    /* Custom CSS for the collapsible vertical navbar */
    #sidebar {
        position: fixed; /* Fixed position */
        top: 0px; /* Adjust this value to align with the second navbar */
        left: 0;
        height: 100%;
        width: 250px;
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

    /* Custom CSS for the content area */
    #content {
        margin-left: 250px;
        padding: 15px;
    }
    
</style>
<body>
<body style="background: url(images/photo-1608501078713-8e445a709b39.jpg);background-size: 100%; background-repeat:no-repeat; ">
<div class="horizontal-navbar">    
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(168, 94, 236);">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="flex-direction: column;align-items:flex-start">
                    <li class="nav-item">
                        <p style="font-size: 20px;margin: 0 0;color: black;text-transform:capitalize"><?php echo $data1['name']; ?>(Account No: 
                    <?php echo $data1['accountno']; ?>)</p>
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
    </nav></div><br><br><br><br><br>

    <!-- Sidebar Navigation -->
    <div id="sidebar" style="margin-top: 132px;">
    <a href="userdetails1.php" <?php if ($current_page === "dashboard") echo 'class="active"'; ?>>Dashboard</a>
    <a href="transactionhistory.php" <?php if ($current_page === "transactionhistory") echo 'class="active"'; ?>>Transaction History</a>
    <a href="sendmoney.php" <?php if ($current_page === "sendmoney") echo 'class="active"'; ?>>Send Money</a>
    <a href="helpcard.php" <?php if ($current_page === "helpcard") echo 'class="active"'; ?>>Customer Support</a>
    <a href="aboutus.php" <?php if ($current_page === "aboutus") echo 'class="active"'; ?>>About Us</a>
</div><br>
      <div style="text-align: center;margin-left:200px"><p class="text-center" style="font-size: 40px; font-family:Arial, Helvetica, sans-serif;font-weight:bolder;text-align:center">Transaction History</p>
      <div class="container">
        <div class="card w-75 mx-auto"style="border: 1px solid black;">
          <div class="card-body" style="background-color: #b77bc9;color: white;">
            <table class="table table-hover" style="border: 1px solid black;color: white;">
              <thead style="background-color: blueviolet;">
                <tr>
                  <th scope="col" style="text-align: center;border: 1px solid black">Name</th>
                  <th scope="col" style="text-align: center;border: 1px solid black">Amount(₹)</th>
                  <th scope="col" style="text-align: center;border: 1px solid black">Type</th>
                </tr>
              </thead>
              <tbody style="border: 1px solid black;background-color:#ccf4fc;color:black">
               
                  <?php 
                  if($result1->num_rows>0){
                    while($data = $result1->fetch_assoc()){
                      echo "<tr><td>$data[name]</td>";
                      echo "<td>$data[amount]</td>";
                      echo "<td>$data[type]</td></tr>";
                    }
                  }
                  ?>
               
              </tbody>
            </table>
          </div>
    </div></div></div>
      <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>