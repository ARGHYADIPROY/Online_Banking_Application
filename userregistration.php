<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERA BANK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: blueviolet;">
        <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            <img src="images/pngegg.png" style="height: 10vh; width: 10vh; margin-right: 20px;">
            <a class="navbar-brand" href="home.php" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight: bolder; color: white; text-shadow: 4px 4px black">OPERA BANK</a>
        </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card w-100 text-center shadow">
            <div class="card-header" style="background-color: blueviolet; color: white;font-size:x-large;font-weight:bold">
                New Account Form
            </div>
            <div class="card-body" style="background-color: #c1a9e8;">
                <form method="POST">
                    <table class="table" style="color: black;border:1px solid #c1a9e8">
                        <tbody>
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
                    <button type="submit" name="saveAccount" class="btn btn-primary">Register Account</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <p>Already have an account?<a href="login.php">Login</a></p>
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
      
</body>

</html>
