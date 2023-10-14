<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
if (isset($_GET['delete'])) 
  {
    if ($conn->query("delete from users where email = '$_GET[delete]'"))
    {
      header("location:mallaccounts.php");
    }
  }
$current_page = "allaccounts";
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

    /* Custom CSS for the collapsible vertical navbar */
    #sidebar {
        position: fixed; /* Fixed position */
        top: 0;
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
    .navbar {
        position: fixed; /* Fixed position */
        width: 100%;
        z-index: 1;
    }
</style>
<body>
    <body style="background:url(images/4.jpg);background-size: cover">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
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
    </nav><br><br><br><br>
    <div id="sidebar" style="margin-top: 87px;">
    <a href="" <?php if ($current_page === "allaccounts") echo 'class="active"'; ?>>All Accounts</a>
    <a href="mregistration.php" <?php if ($current_page === "addaccount") echo 'class="active"'; ?>>Add Account</a>
    <a href="mfeedback.php" <?php if ($current_page === "feedback") echo 'class="active"'; ?>>Feedback</a>
    </div>
          <div class="container" style="margin-top: 20px;font-size: 17px;">
            <div class="card col-md-10 text-center" style="margin-left:220px">
              <div class="card-header" style="background-color: #A52A2A; color: white; font-size: larger; border-bottom: 1px solid black;">
                All accounts
              </div>
              <div class="card-body" style="background-color:rgb(252, 210, 210);">
               <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  
                  <th scope="col">Name</th>
                  <th scope="col">Account No.</th>
                  <th scope="col">Current Balance</th>
                  <th scope="col">Contact</th>
                  <th scope="col"></th>
                 
                </tr>
              </thead>
              <tbody>
                <?php
                $result = $conn->query("select * from users");
                
              $i = 0;
              if($result->num_rows>0){
                while($data = $result->fetch_assoc()){
                  $i++;
                ?>
                  <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['accountno']; ?></td>
                    <td><?php echo $data['balance']; ?></td>
                    <td><?php echo $data['phnno']; ?></td>
                    
                    <td>
                    <a href="show.php?id=<?php echo $data['email'] ?>" class='btn btn-sm' data-toggle='tooltip' title="View More info" style="background-color: rgb(153, 0, 0);color:white">View</a>
                    
                    <a href="mallaccounts.php?delete=<?php echo $data['email'] ?>" class='btn btn-dark btn-sm' data-toggle='tooltip' title="Delete this account">Delete</a>
                    
                  </td>
                    
                  </tr>
                  <?php
                }
              }
              else{
                echo "No users registered.";
              }

               ?>
              </tbody>
            </table>
            </div>
            </div>

            <div class="container" style="font-size: larger; margin-top: 5vh;margin-left: 110px;" >
            <div class="card  col-md-7 mx-auto">
            <div class="card-header text-center" style="background-color: #A52A2A;color:white">
              Send Notice
            </div>
            <div class="card-body" style="background-color:rgb(252, 210, 210);">
                <form method="post">
                      <textarea class="form-control" name="msg" required placeholder="Write your message"></textarea>
                      <button type="submit" name="send" class="btn btn-block btn-sm my-1 center" style="font-size: medium;background-color:rgb(153, 0, 0);color:white;margin-left:270px">Send</button>
                    </div>
                </form>
                <?php
                if(isset($_POST['send'])){
                  $mssg = $_POST['msg'];
                  if($conn->query("insert into notice (mssg) values ('$mssg')")){
                    echo '<script>alert("Notice Sent")</script>';
                  }
                }
                ?>

              
            </div></div></div>  
            </div><br>
            
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>