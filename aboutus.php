<?php
    $current_page = "aboutus";
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
  /* Custom CSS for the collapsible vertical navbar */
  #sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #f1f1f1;
      padding-top: 86px; /* Adjust for the fixed top navbar */
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
  
  /* Adjust the top navbar position */
  .navbar {
      position: fixed;
      width: 100%;
      z-index: 1;
  }
</style>
<body>

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
</nav><br><br>


<div id="sidebar">
  <a href="userdetails1.php" <?php if ($current_page === "dashboard") echo 'class="active"'; ?>>Dashboard</a>
  <a href="transactionhistory.php" <?php if ($current_page === "transactionhistory") echo 'class="active"'; ?>>Transaction History</a>
  <a href="sendmoney.php" <?php if ($current_page === "sendmoney") echo 'class="active"'; ?>>Send Money</a>
  <a href="helpcard.php" <?php if ($current_page === "helpcard") echo 'class="active"'; ?>>Customer Support</a>
  <a href="aboutus.php" <?php if ($current_page === "aboutus") echo 'class="active"'; ?>>About Us</a>
</div>

<!-- Content Area -->
<div id="content">
    <!-- Your content goes here -->
    <section class="banner1 pt-4 oversease-banner" id="product-banner" style="padding-top: 1.5rem !important;">
      <div class="container">
        <div class="row">
         <div class="col-lg-4 order-2  left-text order-sm-2 order-md-2 order-lg-1 pl-0 pl-mob-grid banner-left-text">
          <div class="top-small-banner-heading">
           A Chance To Know More
          </div>
          <p id="banner-long-title" class="primary-text-color font-weight-bold text-uppercase" style="color: blue;font-size: 50px;font-weight: bolder;">ABOUT US</p>
          <p class="mb-lg-5 mb-sm-3 text-justify">We always aim at providing superior, proactive banking service to niche market globally, while providing cost effective and responsive services</p>
          <p id="banner-long-title" class="primary-text-color font-weight-bold text-uppercase" style="color: black;font-size: 40px;font-weight: bolder;">OUR VISION</p>
          <p class="mb-lg-5 mb-sm-3 text-justify">To provide superior, proactive banking service to niche markets globally, while providing cost effective, responsive service to others in our role as a development bank, and in doing so, meet the requirements of our stakeholders.</p>
         </div>
         <div class="col-lg-8 order-1 order-sm-1 order-md-1 order-lg-2 pr-0 pr-mob-grid"><picture data-fileentryid="525059">
           <img class="img-fluid boder-img product-detail-banner" alt="About us" title="About us" data-fileentryid="525059" src="images/2.jpg"></picture>
         </div>
        </div>
       </div>
    </section>
    <footer style="background-color: rgba(255, 255, 255, 0); margin-bottom: 0;">
        <p style="text-align: center;font-size: 40px;font-weight: bold; color: grey;">Connect With Us</p>
        <ul style="text-align: center;" >
            <i class="fa-brands fa-whatsapp fa-2x" style="color:rgb(68, 255, 0);margin-right: 5px;"></i>
            <i class="fa-brands fa-facebook fa-2x" style="color: rgb(58, 111, 255);margin-right: 5px;"></i>
            <i class="fa-brands fa-instagram fa-2x" style="color:rgb(255, 0, 149);"></i>
            <i class="fa-brands fa-twitter fa-2x" style="color: rgb(0, 195, 255);margin-right: 5px;"></i>
            <i class="fa-brands fa-linkedin fa-2x" style="color: #2a8dff;margin-right: 5px;"></i>
        </ul>
    </footer>
    <script src="https://kit.fontawesome.com/5bfe764483.js" crossorigin="anonymous"></script>
</div>
</body>
</html>
