<?php
$current_page = "addaccount";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERA BANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>

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
        background-color: #A52A2A;
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
<body style="background:url(images/4.jpg);background-size: 100%;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container-fluid">
            <img src="images/pngegg.png" style="height: 10vh; width: 10vh; margin-right: 20px;">
            <a class="navbar-brand" href="" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight: bolder; color: white; text-shadow: 5px 5px black">OPERA BANK</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-outline-light mx-1" style="margin-top: 5px;"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <div id="sidebar" style="margin-top: 87px;">
    <a href="mallaccounts.php" <?php if ($current_page === "allaccounts") echo 'class="active"'; ?>>All Accounts</a>
    <a href="" <?php if ($current_page === "addaccount") echo 'class="active"'; ?>>Add Account</a>
    <a href="mfeedback.php" <?php if ($current_page === "feedback") echo 'class="active"'; ?>>Feedback</a>
    </div>
    <div class="container mt-5">
        <div class="card col-md-11 text-center shadow" style="margin-left: 172px;">
            <div class="card-header" style="background-color: #A52A2A; color: white; font-size: larger; border: 1px solid black;">
                New Account Form
            </div>
            <div class="card-body" style="background-color:rgb(252, 210, 210);">
                <form method="POST">
                    <table class="table" style="color: black;border:1px solid rgb(252, 210, 210)">
                        <tbody >
                            <tr>
                                <th>Name</th>
                                <td><input type="text" name="name" class="form-control" required></td>
                                <th>UID</th>
                                <td><input type="number" name="uid" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th for="gender">Gender</th>
                                <td>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                                <th for="dob">Date of Birth</th>
                                <td><input type="date" class="form-control" id="dob" name="dob" required></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td><input type="number" name="phnno" class="form-control" required></td>
                                <th>Address</th>
                                <td><input type="text" name="address" class="form-control" required></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="email" name="email" class="form-control" required></td>
                                <th>Password</th>
                                <td><input type="password" name="password" class="form-control" required></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="saveAccount" class="btn btn-danger" style="background-color: rgb(153, 0, 0);">Register Account</button>
                    <button type="reset" class="btn btn-dark" >Reset</button>
                    <p>Already have an account? <a href="login.php" style="color:black;text-decoration:none">Login</a></p>
                </form>
                <?php
                $conn = new mysqli("localhost", "root", "", "bank");
                if(isset($_POST['saveAccount'])){
                $accno = time();
                
                $conn->query("insert into users (email,password,accountno,name,uid,gender,phnno,address,dob) values ('$_POST[email]','$_POST[password]','$accno','$_POST[name]','$_POST[uid]','$_POST[gender]','$_POST[phnno]','$_POST[address]','$_POST[dob]');");
                echo '<script > 
                alert("Account Successfully Created!")</script>';
                }
                
            
                ?>  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
      
</body>

</html>
