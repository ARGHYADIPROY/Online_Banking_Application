<?php
	$conn = new mysqli("localhost", "root", "", "bank");
	$resullt = $conn->query("select * from notice");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OPERA BANK </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<style>
	table, th, td, tr {
        border: 1px solid black;
    }

.float-child {
    width: 50%;
    float: left;
}  
</style>
<body>
	<body style="background: url(images/photo-1608501078713-8e445a709b39.jpg);background-size: cover">
		<nav class="navbar navbar-expand-sm navbar-light" style="background-color: blueviolet;">
		<div class="container-fluid ">
			<img src="images/pngegg.png" style="height: 10vh;width: 10vh;margin-right:20px;"/><a class="navbar-brand " href="" style="font-size: 40px; font-family: Pussycat, Algerian, Broadway; font-weight:bolder; color:white; text-shadow: 4px 4px black" >  OPERA BANK</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
				
				<li class="nav-item">
					<button type="button" class="btn " style="background-color: #09ede9; margin-right: 15px; margin-left: 20px;margin-top: 3px;font-family:Arial, Helvetica, sans-serif; font-weight:bold; border: 2px solid white;"><a href="login.php" style="text-decoration: none; color: white;">Login</a></button>
				</li>
				<li class="nav-item">
					<button type="button" class="btn " style="background-color: #09ede9;margin-top: 3px; border: 2px solid white; "><a href="userregistration.php" style="text-decoration: none; color: white;font-family:Arial, Helvetica, sans-serif; font-weight:bold">Registration</a></button>
				</li>
			</ul>		  
			</div>
		</div>
		</nav>
	<div class="float-container">
	<div class="float-child" style="font-size: larger;  margin-top: 8.8vh;">
			<div class="card  col-md-10 mx-auto" >
				<div class="card-body" style="background-color: rgb(168, 94, 236); height:423px">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="height: 400px;margin:1vh 1vh">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/7.jpg" class="d-block w-100" alt="..." style="height: 350px;">
							</div>
							<div class="carousel-item">
								<img src="images/3.jpg" class="d-block w-100" alt="..." style="height: 350px;">
							</div>
							<div class="carousel-item">
								<img src="images/1.jpg" class="d-block w-100" alt="..." style="height: 350px;">
							</div>
							<div class="carousel-item">
								<img src="images/5.jpg" class="d-block w-100" alt="..." style="height: 350px;">
							</div>
							<div class="carousel-item">
								<img src="images/6.jpg" class="d-block w-100" alt="..." style="height: 350px;">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="float-child" style="font-size: larger; margin-top: 8.8vh;" >
			<div class="card  col-md-10 mx-auto">
				<div class="card-header text-center" style="background-color: blueviolet;color:white;font-size: larger;">
					Newsletter
				</div>
				<div class="card-body" style="background-color: rgb(168, 94, 236)">
					<table class="table table-bordered table-sm" style="background-color: #ccf4fc;">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Newsletter</th>
							</tr>
						</thead>
						<?php
						$i=0;
						if($resullt->num_rows>0){
							while($data=$resullt->fetch_assoc()){
								$i++;
						?>
							
						<tbody>
							<tr>
								<td><?php echo $i."."; ?></td>
								<td><?php echo $data['mssg']; ?></td>
							</tr>
						</tbody>
							

						<?php
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>