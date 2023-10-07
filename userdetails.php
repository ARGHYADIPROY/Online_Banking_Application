<?php
session_start();
if(!isset($_SESSION['email'])){ header('location:login.php');}
$conn = new mysqli("localhost", "root", "", "bank");
isset($_SESSION['email']);
$email = $_SESSION['email'];
$result = $conn->query("select * from users where email='$email'");
$data = $result->fetch_assoc();


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
<style>table, th, td ,tr{
    border: 1px solid black;
  }</style>
<body>
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: blueviolet;">
	  <div class="container-fluid ">
		<img src="images/pngegg.png" style="height: 100%;width: 10vh;margin-right:20px;"/><a class="navbar-brand " href="home.php" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight:bolder; color:white; text-shadow: 4px 4px black" >  OPERA BANK</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
		  <ul class="navbar-nav ms-auto">
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" data-toggle="tooltip" title="Logout" class="btn btn-outline-dark mx-1" ><i class="fa-solid fa-right-from-bracket"></i></a>
            </form>
		  </ul>		  
		</div>
	  </div>
	</nav>
    <nav class="navbar navbar-expand-sm navbar-light bg-danger" style="width: 18%;height:100vh;align-items:flex-start">
        <div class="container-fluid" style="flex-direction: column;align-items:flex-start;margin-left:1.5rem">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent" style="flex-direction: column;align-items:flex-start">
            <ul class="navbar-nav ms-auto" style="flex-direction: column;align-items:flex-start">
              <li class="nav-item">
                  <a class="nav-link" href="#" style="font-size: 20px;">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" style="font-size: 20px;">Transaction History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sendmoney.php" style="font-size: 20px;">Send Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="helpcard.php" style="font-size: 20px;">Customer Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html" style="font-size: 20px;">About Us</a>
              </li>
            </ul>	  
          </div>
        </div>
      </nav>
        <div class="container" style="margin-top: 100px;margin-left:300px;position:relative">
            <div class="card w-75 text-center shadowBlue"style="border: 1px solid black;">
              <div class="card-header" style="background-color: brown;color: white;font-size: larger;border-bottom: 1px solid black;">
                ACCOUNT DETAILS
              </div>
              <div class="card-body" style="background-color: #E5AA70;color: white;">
                <table class="table table-bordered" style="color: white;font-size:large;">
                  <tbody>
                    <tr>
                        <th>Account No:</th><td><?php
                          echo $data['accountno'];
                           ?></td>
                      <th>Address:</th><td><?php
                          echo $data['address'];
                           ?></td>
                    </tr><tr>
                        <th>Name:</th><td><?php
                          echo $data['name'];
                           ?></td>
                      <th>UID:</th><td><?php
                          echo $data['uid'];
                           ?></td>
                    </tr><tr>
                      <th>Username:</th><td><?php
                          echo $data['email'];
                           ?></td>
                      <th>Contact Number:</th><td><?php
                          echo $data['phnno'];
                           ?></td>
                    </tr><tr>
                        <th>Date of Birth:</th><td><?php
                          echo $data['dob'];
                           ?></td>
                        <th>Gender:</th><td><?php
                          echo $data['gender'];
                           ?></td>
                    </tr>
                  </tbody>
                </table>
                <div style="color: black;font-size: large;">
                    ACCOUNT BALANCE: ₹<td><?php
                          echo $data['balance'];
                           ?></td>
                  </div>
            </div>
        </div>
      <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</body>
</html>