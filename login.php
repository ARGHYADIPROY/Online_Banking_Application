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
<body style="background: url(images/photo-1608501078713-8e445a709b39.jpg);background-size: 100%; ">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: blueviolet;">
        <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            
            <img src="images/pngegg.png" style="height: 10vh; width: 10vh; margin-right: 20px;">
            <a class="navbar-brand" href="home.php" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight: bolder; color: white; text-shadow: 4px 4px black">OPERA BANK</a>
        </ul>
        </div>
    </nav>
    <br><div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center" style="background-color: blueviolet;">
                        <h2 style="font-family:Arial, Helvetica, sans-serif; font-weight:300;color:white;font-size:45px;font-family: Pussycat, Algerian, Broadway;">LOGIN</h2>
                    </div>
                    <div class="card-body" style="background-color: #09ede9;">
                        <form method="POST" id="login">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div _ngcontent-fqq-c275="" class="form-group mb-3" style="margin-top: 10px;"><select _ngcontent-fqq-c275="" class="custom-select ng-valid ng-touched ng-dirty" name="selectbtn" id="selectbtn" style="background-color:blue;color:aliceblue; border:2px solid violet"><option _ngcontent-fqq-c275="" value="0"> User </option><option _ngcontent-fqq-c275="" value="1"> Manager </option><!----></select></div>
                            <button type="submit" class="btn btn-primary btn-block" name="loginbtn" style="margin-left: 170px; border:2px solid white;">Log in</button>
                            <p>Don't have an account? <a href="userregistration.php" style="text-decoration: none;">Register</a></p>
                        </form>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "bank");
                        if(isset($_POST['loginbtn'])){
                        $email = $_POST['username'];
                        $password = $_POST['password'];
                        $selectbtn = $_POST['selectbtn'];
                        
                        if($selectbtn==0){
                        $result = $conn->query("select * from users where email='$email' AND password='$password'");
                        if($result->num_rows>0)
                                {
                            session_start();
                                $data = $result->fetch_assoc();
                                $_SESSION['email']=$data['email'];
                                
                                header('location:userdetails1.php');
                            
                                }
                            else
                                {
                            echo '<script>alert("Wrong Username or Password!")</script>';
                                }
                        }
                        else{
                            $result = $conn->query("select * from manager where email='$email' AND password='$password'");
                    
                        
                            if($result->num_rows>0)
                                    { 
    
    
    
                                session_start();
                                    $data = $result->fetch_assoc();
                                    $_SESSION['email']=$data['email'];
                                
                                    
    
                                    header('location:mallaccounts.php');
                                
                                    }
                                    else
                                {
                            echo '<script>alert("Wrong Username or Password!")</script>';
                                }
                            }
                        }   
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
