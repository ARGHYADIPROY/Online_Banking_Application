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
    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<style>
	table, th, td, tr {
        border: 1px solid black;
    }
</style>
<body>
    <body style="background-color:black;background-size: 100%; background-repeat:no-repeat; "></body>
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

	<div class="container" style="font-size: larger; margin-top: 5vh; margin-left:-40vh" >
            <div class="card  col-md-6 mx-auto">
            <div class="card-header text-center" style="background-color: blueviolet;color:white;font-size: larger;">
              Notice
            </div>
            <div class="card-body" style="background-color: rgb(168, 94, 236)">
			<table class="table table-bordered table-sm" style="background-color: #ccf4fc;">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Notice</th>
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

</body>
</html>