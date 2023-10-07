<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
$result = $conn->query("select * from users where email='$email'");
$data = $result->fetch_assoc();
$current_page = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<style>
    table, th, td, tr {
        border: 1px solid black;
    }

    /* Custom CSS for the collapsible vertical navbar */
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

    /* Custom CSS for the content area */
    #content {
        margin-left: 250px;
        padding: 15px;
    }
</style>
<body>
    <!-- Top Navbar -->
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
            <img src="images/pngegg.png" style="height: 10vh; width: 10vh; margin-right: 20px;">
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

    <!-- Content Area -->
    <div id="content">
        <div class="card w-75 text-center" style="border: 1px solid black;margin-left: 120px;margin-top: 40px;">
            <div class="card-header" style="background-color: blueviolet; color: white; font-size: larger; border-bottom: 1px solid black;">
                ACCOUNT DETAILS
            </div>
            <div class="card-body" style="background-color: #ccf4fc; color: white;">
                <table class="table table-bordered" style="color: black; font-size: large;">
                    <tbody>
                        <tr>
                            <th>Account No:</th>
                            <td>
                                <?php echo $data['accountno']; ?>
                            </td>
                            <th>Address:</th>
                            <td>
                                <?php echo $data['address']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>
                                <?php echo $data['name']; ?>
                            </td>
                            <th>UID:</th>
                            <td>
                                <?php echo $data['uid']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Username:</th>
                            <td>
                                <?php echo $data['email']; ?>
                            </td>
                            <th>Contact Number:</th>
                            <td>
                                <?php echo $data['phnno']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td>
                                <?php echo $data['dob']; ?>
                            </td>
                            <th>Gender:</th>
                            <td>
                                <?php echo $data['gender']; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="color: black; font-size: 22px;font-weight:bolder;text-align:center">
                    ACCOUNT BALANCE: ₹
                    <?php echo $data['balance']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>
