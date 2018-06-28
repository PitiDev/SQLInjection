<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SQL Injection</title>
    <link href="css/htmlstyles.css" rel="stylesheet">
  </head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <body style="font-family:Phetsarath ot;">
  <div class="container-narrow">
		
		<div class="" style="text-align: center;">
			<h1><b>ທົດລອງການໂຈມຕີດ້ວຍ  SQL Injection</b></h1>
        </div>
		
		<div class="response">
		  <div class="row justify-content-center">
		  	<div class="col-md-4">
		  	  <form method="POST" autocomplete="off">
				<p style="color:white">
				 <label for="">Username</label><br>
				 <input type="email" id="uid" name="uid" class="form-control" placeholder="User"><br>
				 <label for="">Password</label><br>
				 <input type="password" id="password" name="password" class="form-control" placeholder="Password">
				 </p>
				 <br />
				 <p>
				 <input type="submit" value="Submit" class="btn btn-primary" /> 
				 <input type="reset" value="Reset" class="btn btn-danger"/>
				</p>
			  </form>
		  	</div>
		  </div>
        </div>
    
		<br />
		
      <div class="row marketing">
        <div class="col-lg-12">
         <?php include("control.php"); ?>
	    </div>
	  </div>
	  
	  <div class="footer">
		<p>By Piti PHANTHASOMBATH</p>
      </div>
	</div> <!-- /container -->
  
</body>
</html>