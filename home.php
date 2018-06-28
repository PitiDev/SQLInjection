<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}

ini_set('display_errors', 1);
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SQL Injection</title>
    <link href="css/htmlstyles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	</head>

 <body style="font-family:Phetsarath ot;">
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="" style="color:#ffffff">
				<h2>ສະບາຍດີ <?php echo $_SESSION["username"]; ?>   !! ໂຈມຕີລະບົບສຳເລັດ Hacked!</h2>
			</p>
    </div>
		
	  <div class="footer">
		<a href="logout.php" class="btn btn-success">Logout</a>
      </div><br>

      <div>
      	<div>
      		<table class="table table-bordered">
      		  <tr>
      		  	<th>ID</th>
      		    <th>User</th>
      		    <th>Password</th>
              <th>Fname</th>
              <th>Description</th>
      		  </tr>
<?php

$query = "SELECT * FROM users " ;
$result = mysqli_query($con, $query);
$rows=0;
if(mysqli_num_rows ($result) ){
  while($row = mysqli_fetch_array($result)) {
    
?>
      		  <tr>
      		  	<td><?php echo $row["id"]; ?></td>
      		  	<td><?php echo $row["username"]; ?></td>
      		  	<td><?php echo $row["password"]; ?></td>
              <td><?php echo $row["fname"]; ?></td>
              <td><?php echo $row["description"]; ?></td>
      		  </tr>

     <?php
         } 
       }
      ?>
      		</table>
      	</div>
      </div>
	  
	  
	  <div class="footer">
		<p>By Piti PHANTHASOMBATH</p>
      </div>

	</div> 
  
</body>
</html>